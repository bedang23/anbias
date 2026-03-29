@extends('layouts.app')

@section('title', $author->meta_title ?: ($author->name.' | Author | Anbias'))
@section('meta_description', $author->meta_description ?: ('Read insights and case studies written by '.$author->name.' at Anbias.'))
@section('canonical', route('authors.show', $author->slug))
@section('og_title', $author->meta_title ?: ($author->name.' | Anbias'))
@section('og_description', $author->meta_description ?: ('Author profile for '.$author->name.' at Anbias.'))

@push('styles')
<link rel="stylesheet" href="{{ asset('css/insights.css') }}">
@endpush

@section('content')
<section class="insights-hero">
  <div class="insights-hero-inner">
    <div class="insights-breadcrumb">
      <a href="{{ route('home') }}">Home</a>
      <span>/</span>
      <span class="current">Author</span>
    </div>
    <div class="insights-eyebrow">Anbias Author Profile</div>
    <h1 class="insights-title">{{ $author->name }}</h1>
    <p class="insights-sub">{{ $author->designation ?: 'Engineering Contributor' }}</p>
  </div>
</section>

<section class="insights-section">
  <div class="insights-container">
    <article class="author-overview">
      <h2>{{ $author->designation ?: 'Contributor' }}</h2>
      <p>{{ $author->bio }}</p>

      <div class="author-stats">
        <div class="author-stat">
          <small>Experience</small>
          <strong>{{ $author->years_experience }}+</strong>
        </div>
        <div class="author-stat">
          <small>Blogs Published</small>
          <strong>{{ $blogs->count() }}</strong>
        </div>
        <div class="author-stat">
          <small>Case Studies</small>
          <strong>{{ $caseStudies->count() }}</strong>
        </div>
      </div>
    </article>

    @if($blogs->isNotEmpty())
      <div class="article-related">
        <h3>Blogs by {{ $author->name }}</h3>
        <div class="insights-grid">
          @foreach($blogs as $blog)
            <article class="insight-card">
              <a href="{{ route('blogs.show', $blog->slug) }}">
                <img class="insight-card-image" src="{{ asset($blog->featured_image_path) }}" alt="{{ $blog->title }}" loading="lazy" decoding="async">
              </a>
              <div class="insight-card-body">
                <h4 class="insight-card-title"><a href="{{ route('blogs.show', $blog->slug) }}">{{ $blog->title }}</a></h4>
                <p class="insight-card-excerpt">{{ $blog->excerpt }}</p>
              </div>
            </article>
          @endforeach
        </div>
      </div>
    @endif

    @if($caseStudies->isNotEmpty())
      <div class="article-related">
        <h3>Case Studies by {{ $author->name }}</h3>
        <div class="insights-grid">
          @foreach($caseStudies as $caseStudy)
            <article class="insight-card">
              <a href="{{ route('case-studies.show', $caseStudy->slug) }}">
                <img class="insight-card-image" src="{{ asset($caseStudy->featured_image_path) }}" alt="{{ $caseStudy->title }}" loading="lazy" decoding="async">
              </a>
              <div class="insight-card-body">
                <h4 class="insight-card-title"><a href="{{ route('case-studies.show', $caseStudy->slug) }}">{{ $caseStudy->title }}</a></h4>
                <p class="insight-card-excerpt">{{ $caseStudy->excerpt }}</p>
              </div>
            </article>
          @endforeach
        </div>
      </div>
    @endif
  </div>
</section>
@endsection
