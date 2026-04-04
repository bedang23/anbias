<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Concerns\HandlesFeaturedImageUploads;
use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\CaseStudy;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class CaseStudyController extends Controller
{
    use HandlesFeaturedImageUploads;

    public function index(): View
    {
        return view('admin.case-studies.index', [
            'caseStudies' => CaseStudy::query()->with(['author', 'category'])->latest()->paginate(15),
        ]);
    }

    public function create(): View
    {
        return view('admin.case-studies.create', [
            'caseStudy' => new CaseStudy(),
            'authors' => Author::query()->orderBy('name')->get(),
            'categories' => Category::query()->where('type', Category::TYPE_CASE_STUDY)->orderBy('name')->get(),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $payload = $this->validatedPayload($request);
        $payload['featured_image_path'] = $this->storeFeaturedImage($request->file('featured_image'));

        CaseStudy::query()->create($payload);

        return redirect()->route('admin.case-studies.index')->with('status', 'Case study created successfully.');
    }

    public function edit(CaseStudy $caseStudy): View
    {
        return view('admin.case-studies.edit', [
            'caseStudy' => $caseStudy,
            'authors' => Author::query()->orderBy('name')->get(),
            'categories' => Category::query()->where('type', Category::TYPE_CASE_STUDY)->orderBy('name')->get(),
        ]);
    }

    public function update(Request $request, CaseStudy $caseStudy): RedirectResponse
    {
        $payload = $this->validatedPayload($request, $caseStudy, false);

        if ($request->hasFile('featured_image')) {
            $this->removeFeaturedImage($caseStudy->featured_image_path);
            $payload['featured_image_path'] = $this->storeFeaturedImage($request->file('featured_image'));
        }

        $caseStudy->update($payload);

        return redirect()->route('admin.case-studies.index')->with('status', 'Case study updated successfully.');
    }

    public function destroy(CaseStudy $caseStudy): RedirectResponse
    {
        $this->removeFeaturedImage($caseStudy->featured_image_path);
        $caseStudy->delete();

        return redirect()->route('admin.case-studies.index')->with('status', 'Case study deleted successfully.');
    }

    /**
     * @return array<string, mixed>
     */
    private function validatedPayload(Request $request, ?CaseStudy $caseStudy = null, bool $imageRequired = true): array
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'string', 'max:255', 'alpha_dash', Rule::unique('case_studies', 'slug')->ignore($caseStudy?->id)],
            'author_id' => ['required', 'integer', Rule::exists('authors', 'id')],
            'category_id' => ['required', 'integer', Rule::exists('categories', 'id')->where('type', Category::TYPE_CASE_STUDY)],
            'excerpt' => ['required', 'string', 'max:1500'],
            'content' => ['required', 'string'],
            'featured_image' => [$imageRequired ? 'required' : 'nullable', 'image', 'max:2048'],
            'is_published' => ['nullable', 'boolean'],
            'published_at' => ['nullable', 'date'],
            'meta_title' => ['required', 'string', 'max:255'],
            'meta_description' => ['required', 'string', 'max:320'],
            'og_title' => ['nullable', 'string', 'max:255'],
            'og_description' => ['nullable', 'string', 'max:320'],
            'canonical_url' => ['nullable', 'url', 'max:500'],
        ]);

        unset($validated['featured_image']);
        $validated['is_published'] = (bool) $request->boolean('is_published');

        return $validated;
    }
}
