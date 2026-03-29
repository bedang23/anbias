<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Concerns\HandlesFeaturedImageUploads;
use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class BlogController extends Controller
{
    use HandlesFeaturedImageUploads;

    public function index(): View
    {
        return view('admin.blogs.index', [
            'blogs' => Blog::query()->with(['author', 'category'])->latest()->paginate(15),
        ]);
    }

    public function create(): View
    {
        return view('admin.blogs.create', [
            'blog' => new Blog(),
            'authors' => Author::query()->orderBy('name')->get(),
            'categories' => Category::query()->where('type', Category::TYPE_BLOG)->orderBy('name')->get(),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $payload = $this->validatedPayload($request);
        $payload['featured_image_path'] = $this->storeFeaturedImage($request->file('featured_image'));

        Blog::query()->create($payload);

        return redirect()->route('admin.blogs.index')->with('status', 'Blog created successfully.');
    }

    public function edit(Blog $blog): View
    {
        return view('admin.blogs.edit', [
            'blog' => $blog,
            'authors' => Author::query()->orderBy('name')->get(),
            'categories' => Category::query()->where('type', Category::TYPE_BLOG)->orderBy('name')->get(),
        ]);
    }

    public function update(Request $request, Blog $blog): RedirectResponse
    {
        $payload = $this->validatedPayload($request, $blog, false);

        if ($request->hasFile('featured_image')) {
            $this->removeFeaturedImage($blog->featured_image_path);
            $payload['featured_image_path'] = $this->storeFeaturedImage($request->file('featured_image'));
        }

        $blog->update($payload);

        return redirect()->route('admin.blogs.index')->with('status', 'Blog updated successfully.');
    }

    public function destroy(Blog $blog): RedirectResponse
    {
        $this->removeFeaturedImage($blog->featured_image_path);
        $blog->delete();

        return redirect()->route('admin.blogs.index')->with('status', 'Blog deleted successfully.');
    }

    /**
     * @return array<string, mixed>
     */
    private function validatedPayload(Request $request, ?Blog $blog = null, bool $imageRequired = true): array
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'string', 'max:255', 'alpha_dash', Rule::unique('blogs', 'slug')->ignore($blog?->id)],
            'author_id' => ['required', 'integer', Rule::exists('authors', 'id')],
            'category_id' => ['required', 'integer', Rule::exists('categories', 'id')->where('type', Category::TYPE_BLOG)],
            'excerpt' => ['required', 'string', 'max:1500'],
            'content' => ['required', 'string'],
            'featured_image' => [$imageRequired ? 'required' : 'nullable', 'image', 'max:4096'],
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
