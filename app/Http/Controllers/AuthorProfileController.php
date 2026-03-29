<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\View\View;

class AuthorProfileController extends Controller
{
    public function show(string $slug): View
    {
        $author = Author::query()
            ->where('slug', $slug)
            ->firstOrFail();

        $blogs = $author->blogs()
            ->published()
            ->latest('published_at')
            ->get();

        $caseStudies = $author->caseStudies()
            ->published()
            ->latest('published_at')
            ->get();

        return view('authors.show', [
            'author' => $author,
            'blogs' => $blogs,
            'caseStudies' => $caseStudies,
        ]);
    }
}
