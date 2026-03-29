<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function index(): View
    {
        $blogs = Blog::query()
            ->with(['author', 'category'])
            ->published()
            ->latest('published_at')
            ->latest('id')
            ->get();

        return view('blogs.index', [
            'blogs' => $blogs,
        ]);
    }

    public function show(string $slug): View
    {
        $blog = Blog::query()
            ->with(['author', 'category'])
            ->published()
            ->where('slug', $slug)
            ->firstOrFail();

        $relatedBlogs = Blog::query()
            ->published()
            ->where('id', '!=', $blog->id)
            ->where('category_id', $blog->category_id)
            ->latest('published_at')
            ->take(3)
            ->get();

        return view('blogs.show', [
            'blog' => $blog,
            'relatedBlogs' => $relatedBlogs,
        ]);
    }
}
