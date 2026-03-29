<?php

namespace App\Http\Controllers;

use App\Models\CaseStudy;
use Illuminate\View\View;

class CaseStudyController extends Controller
{
    public function index(): View
    {
        $caseStudies = CaseStudy::query()
            ->with(['author', 'category'])
            ->published()
            ->latest('published_at')
            ->latest('id')
            ->get();

        return view('case-studies.index', [
            'caseStudies' => $caseStudies,
        ]);
    }

    public function show(string $slug): View
    {
        $caseStudy = CaseStudy::query()
            ->with(['author', 'category'])
            ->published()
            ->where('slug', $slug)
            ->firstOrFail();

        $relatedCaseStudies = CaseStudy::query()
            ->published()
            ->where('id', '!=', $caseStudy->id)
            ->where('category_id', $caseStudy->category_id)
            ->latest('published_at')
            ->take(3)
            ->get();

        return view('case-studies.show', [
            'caseStudy' => $caseStudy,
            'relatedCaseStudies' => $relatedCaseStudies,
        ]);
    }
}
