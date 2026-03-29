@extends('layouts.app')

@section('title', 'About Anbias | AI-Powered Web Development & Security')
@section('meta_description', 'Learn about Anbias, founded in 2021 and operating across Raipur, Pune, USA, and Dubai with expertise from WordPress to Next.js.')

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
      <span class="current">About</span>
    </div>

    <div class="info-eyebrow">Company Profile</div>
    <h1 class="info-title">About<br><span class="ol">Anbias</span></h1>
    <p class="info-sub">
      Anbias is a practical engineering studio focused on web development, security, and performance.
      We started in 2021, were set up in Raipur (Chhattisgarh), and now support businesses across India,
      the US, and Dubai.
    </p>
  </div>
</section>

<section class="info-main">
  <div class="container">
    <div class="info-grid">
      <article class="info-card">
        <h2>Who We Are</h2>
        <p>
          We are a delivery-first team that combines modern engineering workflows with AI acceleration,
          while keeping senior review and production quality as non-negotiables.
        </p>
        <ul class="info-list">
          <li>Founded in 2021</li>
          <li>Setup and registered in Raipur, Chhattisgarh</li>
          <li>Active delivery across Raipur, Pune, USA, and Dubai</li>
        </ul>
      </article>

      <article class="info-card">
        <h2>Tech Coverage</h2>
        <p>
          We work across legacy and modern stacks based on business fit, not hype.
          From CMS websites to advanced custom applications, we build what is needed.
        </p>
        <ul class="info-list">
          <li>WordPress, Webflow, and CMS-led builds</li>
          <li>React, Next.js, Node.js, and TypeScript systems</li>
          <li>Performance, SEO, security hardening, and maintenance</li>
        </ul>
      </article>

      <article class="info-card-wide">
        <h2>How We Work</h2>
        <p>
          Every project starts with a consultation, followed by a scoped roadmap, then iterative delivery.
          We focus on measurable outcomes: speed, reliability, security posture, and conversion quality.
        </p>
        <h3>Core Principles</h3>
        <ul class="info-list">
          <li>Clear scope and timelines before execution</li>
          <li>Transparent communication and practical recommendations</li>
          <li>No unnecessary lock-ins, tools, or complexity</li>
        </ul>
        <a href="{{ route('contact') }}" class="info-cta">Talk to Our Team →</a>
      </article>
    </div>
  </div>
</section>
@endsection
