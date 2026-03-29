<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function index(): View
    {
        return view('admin.categories.index', [
            'categories' => Category::query()->orderBy('type')->orderBy('name')->paginate(20),
        ]);
    }

    public function create(): View
    {
        return view('admin.categories.create', [
            'category' => new Category(),
            'types' => $this->types(),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $payload = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'string', 'max:255', 'alpha_dash', Rule::unique('categories', 'slug')],
            'type' => ['required', Rule::in(array_keys($this->types()))],
            'description' => ['nullable', 'string', 'max:2000'],
        ]);

        Category::query()->create($payload);

        return redirect()->route('admin.categories.index')->with('status', 'Category created successfully.');
    }

    public function edit(Category $category): View
    {
        return view('admin.categories.edit', [
            'category' => $category,
            'types' => $this->types(),
        ]);
    }

    public function update(Request $request, Category $category): RedirectResponse
    {
        $payload = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'string', 'max:255', 'alpha_dash', Rule::unique('categories', 'slug')->ignore($category->id)],
            'type' => ['required', Rule::in(array_keys($this->types()))],
            'description' => ['nullable', 'string', 'max:2000'],
        ]);

        $category->update($payload);

        return redirect()->route('admin.categories.index')->with('status', 'Category updated successfully.');
    }

    public function destroy(Category $category): RedirectResponse
    {
        if ($category->blogs()->exists() || $category->caseStudies()->exists()) {
            return back()->withErrors([
                'category' => 'Cannot delete this category because blogs or case studies are linked to it.',
            ]);
        }

        $category->delete();

        return redirect()->route('admin.categories.index')->with('status', 'Category deleted successfully.');
    }

    /**
     * @return array<string, string>
     */
    private function types(): array
    {
        return [
            Category::TYPE_BLOG => 'Blog',
            Category::TYPE_CASE_STUDY => 'Case Study',
        ];
    }
}
