<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class AuthorController extends Controller
{
    public function index(): View
    {
        return view('admin.authors.index', [
            'authors' => Author::query()->latest()->paginate(15),
        ]);
    }

    public function create(): View
    {
        return view('admin.authors.create', [
            'author' => new Author(),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $payload = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'string', 'max:255', 'alpha_dash', Rule::unique('authors', 'slug')],
            'designation' => ['nullable', 'string', 'max:255'],
            'years_experience' => ['required', 'integer', 'min:0', 'max:60'],
            'bio' => ['nullable', 'string', 'max:12000'],
            'meta_title' => ['nullable', 'string', 'max:255'],
            'meta_description' => ['nullable', 'string', 'max:320'],
        ]);

        Author::query()->create($payload);

        return redirect()->route('admin.authors.index')->with('status', 'Author created successfully.');
    }

    public function edit(Author $author): View
    {
        return view('admin.authors.edit', [
            'author' => $author,
        ]);
    }

    public function update(Request $request, Author $author): RedirectResponse
    {
        $payload = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'string', 'max:255', 'alpha_dash', Rule::unique('authors', 'slug')->ignore($author->id)],
            'designation' => ['nullable', 'string', 'max:255'],
            'years_experience' => ['required', 'integer', 'min:0', 'max:60'],
            'bio' => ['nullable', 'string', 'max:12000'],
            'meta_title' => ['nullable', 'string', 'max:255'],
            'meta_description' => ['nullable', 'string', 'max:320'],
        ]);

        $author->update($payload);

        return redirect()->route('admin.authors.index')->with('status', 'Author updated successfully.');
    }

    public function destroy(Author $author): RedirectResponse
    {
        if ($author->blogs()->exists() || $author->caseStudies()->exists()) {
            return back()->withErrors([
                'author' => 'Cannot delete this author because blogs or case studies are linked to it.',
            ]);
        }

        $author->delete();

        return redirect()->route('admin.authors.index')->with('status', 'Author deleted successfully.');
    }
}
