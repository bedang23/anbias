@extends('layouts.app')

@section('title', $caseStudy->meta_title)
@section('meta_description', $caseStudy->meta_description)
@section('canonical', $caseStudy->canonical_url ?: route('case-studies.show', $caseStudy->slug))
@section('og_title', $caseStudy->og_title ?: $caseStudy->meta_title)
@section('og_description', $caseStudy->og_description ?: $caseStudy->meta_description)
@section('og_image', asset($caseStudy->featured_image_path))

@push('styles')
<link rel="stylesheet" href="{{ asset('css/insights.css') }}">
@endpush

@section('content')
<section class="insights-hero">
  <div class="insights-hero-inner">
    <div class="insights-breadcrumb">
      <a href="{{ route('home') }}">Home</a>
      <span>/</span>
      <a href="{{ route('case-studies.index') }}">Case Studies</a>
      <span>/</span>
      <span class="current">{{ $caseStudy->title }}</span>
    </div>
    <div class="insights-eyebrow">{{ $caseStudy->category->name }}</div>
    <h1 class="insights-title">{{ $caseStudy->title }}</h1>
    <p class="insights-sub">{{ $caseStudy->excerpt }}</p>
  </div>
</section>

<section class="article-wrap">
  <div class="article-container">
    <img class="article-featured" src="{{ asset($caseStudy->featured_image_path) }}" alt="{{ $caseStudy->title }}" width="1200" height="630" decoding="async">

    <div class="article-meta">
      <span class="insight-chip">By <a class="insight-link" href="{{ route('authors.show', $caseStudy->author->slug) }}">{{ $caseStudy->author->name }}</a></span>
      <span class="insight-chip">{{ optional($caseStudy->published_at)->format('M d, Y') ?: 'Published' }}</span>
      <span class="insight-chip">{{ $caseStudy->category->name }}</span>
    </div>

    <article class="article-content">
      {!! $caseStudy->content !!}
    </article>

    @if($relatedCaseStudies->isNotEmpty())
      <div class="article-related">
        <h3>Related Case Studies</h3>
        <div class="insights-grid">
          @foreach($relatedCaseStudies as $related)
            <article class="insight-card">
              <a href="{{ route('case-studies.show', $related->slug) }}">
                <img class="insight-card-image" src="{{ asset($related->featured_image_path) }}" alt="{{ $related->title }}" loading="lazy" decoding="async">
              </a>
              <div class="insight-card-body">
                <h4 class="insight-card-title"><a href="{{ route('case-studies.show', $related->slug) }}">{{ $related->title }}</a></h4>
                <p class="insight-card-excerpt">{{ $related->excerpt }}</p>
              </div>
            </article>
          @endforeach
        </div>
      </div>
    @endif
  </div>
</section>
@endsection
