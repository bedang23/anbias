@extends('layouts.app')

@section('title', 'Sitemap | Anbias')
@section('meta_description', 'Browse all key pages and service pages on the Anbias website.')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/info-pages.css') }}">
@endpush

@section('content')
<section class="info-hero">
  <div class="info-hero-grid"></div>
  <div class="info-hero-scan"></div>

  <div class="info-hero-inner">
    <div class="info-breadcrumb">
      <a href="{{ route('home') }}">Home</a>
      <span>/</span>
      <span class="current">Sitemap</span>
    </div>

    <div class="info-eyebrow">Navigation</div>
    <h1 class="info-title">Site<br><span class="ol">Map</span></h1>
    <p class="info-sub">All major pages and service pages are listed below for quick navigation.</p>
  </div>
</section>

<section class="info-main">
  <div class="container">
    <div class="info-grid">
      <article class="info-card">
        <h2>Main Pages</h2>
        <div class="info-links">
          <a class="info-link" href="{{ route('home') }}"><span>Home</span><span>↗</span></a>
          <a class="info-link" href="{{ route('contact') }}"><span>Contact</span><span>↗</span></a>
          <a class="info-link" href="{{ route('about') }}"><span>About Us</span><span>↗</span></a>
          <a class="info-link" href="{{ route('services.index') }}"><span>Services</span><span>↗</span></a>
        </div>
      </article>

      <article class="info-card">
        <h2>Legal Pages</h2>
        <div class="info-links">
          <a class="info-link" href="{{ route('privacy') }}"><span>Privacy Policy</span><span>↗</span></a>
          <a class="info-link" href="{{ route('terms') }}"><span>Terms & Conditions</span><span>↗</span></a>
          <a class="info-link" href="{{ route('sitemap') }}"><span>Sitemap</span><span>↗</span></a>
        </div>
      </article>

      <article class="info-card-wide">
        <h2>Service Pages</h2>
        <div class="info-links">
          <a class="info-link" href="{{ route('services.show', ['slug' => 'web-development']) }}"><span>Web Development</span><span>↗</span></a>
          <a class="info-link" href="{{ route('services.show', ['slug' => 'web-security']) }}"><span>Web Security / VAPT</span><span>↗</span></a>
          <a class="info-link" href="{{ route('services.show', ['slug' => 'ai-development']) }}"><span>AI-Powered Development</span><span>↗</span></a>
          <a class="info-link" href="{{ route('services.show', ['slug' => 'seo']) }}"><span>SEO & Rankings</span><span>↗</span></a>
          <a class="info-link" href="{{ route('services.show', ['slug' => 'ecommerce']) }}"><span>eCommerce Development</span><span>↗</span></a>
          <a class="info-link" href="{{ route('services.show', ['slug' => 'maintenance']) }}"><span>Maintenance & Support</span><span>↗</span></a>
        </div>
      </article>
    </div>
  </div>
</section>
@endsection
