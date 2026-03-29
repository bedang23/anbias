@extends('layouts.app')

@section('title', 'Case Studies | Anbias Delivery Outcomes')
@section('meta_description', 'Explore Anbias case studies covering custom web builds, SEO growth, and operational automation systems delivered for modern businesses.')
@section('canonical', route('case-studies.index'))
@section('og_title', 'Anbias Case Studies - Delivery Outcomes')
@section('og_description', 'Real outcomes from web engineering, SEO execution, and automation programs delivered by Anbias.')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/insights.css') }}">
@endpush

@section('content')
<section class="insights-hero">
  <div class="insights-hero-inner">
    <div class="insights-breadcrumb">
      <a href="{{ route('home') }}">Home</a>
      <span>/</span>
      <span class="current">Case Studies</span>
    </div>
    <div class="insights-eyebrow">Anbias Proven Work</div>
    <h1 class="insights-title">Case <span class="ol">Studies</span></h1>
    <p class="insights-sub">Detailed snapshots of how Anbias approaches engineering, SEO, and automation to create measurable business results.</p>
  </div>
</section>

<section class="insights-section">
  <div class="insights-container">
    @if($caseStudies->isEmpty())
      <p class="insights-sub">No case studies are published yet.</p>
    @else
      <div class="insights-grid">
        @foreach($caseStudies as $caseStudy)
          <article class="insight-card">
            <a href="{{ route('case-studies.show', $caseStudy->slug) }}">
              <img class="insight-card-image" src="{{ asset($caseStudy->featured_image_path) }}" alt="{{ $caseStudy->title }}" loading="lazy" decoding="async">
            </a>
            <div class="insight-card-body">
              <div class="insight-card-meta">
                <span class="insight-chip">{{ $caseStudy->category->name }}</span>
                <span class="insight-chip">{{ optional($caseStudy->published_at)->format('M d, Y') ?: 'Published' }}</span>
              </div>
              <h2 class="insight-card-title"><a href="{{ route('case-studies.show', $caseStudy->slug) }}">{{ $caseStudy->title }}</a></h2>
              <p class="insight-card-excerpt">{{ $caseStudy->excerpt }}</p>
              <div class="insight-card-footer">
                <span class="insight-card-byline">By <a class="insight-link" href="{{ route('authors.show', $caseStudy->author->slug) }}">{{ $caseStudy->author->name }}</a></span>
                <a class="insight-link" href="{{ route('case-studies.show', $caseStudy->slug) }}">Read Study →</a>
              </div>
            </div>
          </article>
        @endforeach
      </div>
    @endif
  </div>
</section>
@endsection
