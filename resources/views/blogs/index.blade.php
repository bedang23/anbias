@extends('layouts.app')

@section('title', 'Blog | Anbias Engineering & AI Insights')
@section('meta_description', 'Read Anbias blog articles on AI transformation, modern web engineering, and practical delivery strategies for global businesses.')
@section('canonical', route('blogs.index'))
@section('og_title', 'Anbias Blog - Engineering & AI Insights')
@section('og_description', 'Latest insights on agentic AI, Next.js, performance engineering, and digital growth execution.')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/insights.css') }}">
@endpush

@section('content')
<section class="insights-hero">
  <div class="insights-hero-inner">
    <div class="insights-breadcrumb">
      <a href="{{ route('home') }}">Home</a>
      <span>/</span>
      <span class="current">Blog</span>
    </div>
    <div class="insights-eyebrow">Anbias Knowledge Base</div>
    <h1 class="insights-title">Engineering <span class="ol">Blog</span></h1>
    <p class="insights-sub">Actionable writing from the Anbias team on AI-powered delivery, architecture decisions, growth engineering, and modern web stack execution.</p>
  </div>
</section>

<section class="insights-section">
  <div class="insights-container">
    @if($blogs->isEmpty())
      <p class="insights-sub">No blog posts are published yet.</p>
    @else
      <div class="insights-grid">
        @foreach($blogs as $blog)
          <article class="insight-card">
            <a href="{{ route('blogs.show', $blog->slug) }}">
              <img class="insight-card-image" src="{{ asset($blog->featured_image_path) }}" alt="{{ $blog->title }}" loading="lazy" decoding="async">
            </a>
            <div class="insight-card-body">
              <div class="insight-card-meta">
                <span class="insight-chip">{{ $blog->category->name }}</span>
                <span class="insight-chip">{{ optional($blog->published_at)->format('M d, Y') ?: 'Published' }}</span>
              </div>
              <h2 class="insight-card-title"><a href="{{ route('blogs.show', $blog->slug) }}">{{ $blog->title }}</a></h2>
              <p class="insight-card-excerpt">{{ $blog->excerpt }}</p>
              <div class="insight-card-footer">
                <span class="insight-card-byline">By <a class="insight-link" href="{{ route('authors.show', $blog->author->slug) }}">{{ $blog->author->name }}</a></span>
                <a class="insight-link" href="{{ route('blogs.show', $blog->slug) }}">Read Article →</a>
              </div>
            </div>
          </article>
        @endforeach
      </div>
    @endif
  </div>
</section>
@endsection
