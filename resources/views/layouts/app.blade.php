<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @php
        $seoTitle = trim($__env->yieldContent('title', 'Anbias | Build Smarter. Ship Faster. Stay Secure.'));
        $seoDescription = trim($__env->yieldContent('meta_description', 'Anbias delivers AI-powered web development and web security for ambitious businesses.'));
        $canonicalUrl = trim($__env->yieldContent('canonical', url()->current()));
        $defaultOgImage = asset('images/og-anbias.png');
        $ogImage = trim($__env->yieldContent('og_image', $defaultOgImage));
    @endphp

    <title>{{ $seoTitle }}</title>
    <meta name="description" content="{{ $seoDescription }}">
    <meta name="robots" content="@yield('meta_robots', 'index,follow')">
    <link rel="canonical" href="{{ $canonicalUrl }}">

    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:site_name" content="Anbias">
    <meta property="og:title" content="{{ trim($__env->yieldContent('og_title', $seoTitle)) }}">
    <meta property="og:description" content="{{ trim($__env->yieldContent('og_description', $seoDescription)) }}">
    <meta property="og:url" content="{{ $canonicalUrl }}">
    <meta property="og:image" content="{{ $ogImage }}">
    <meta property="og:image:secure_url" content="{{ $ogImage }}">
    <meta property="og:image:alt" content="Anbias - AI-powered web development and security">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ trim($__env->yieldContent('twitter_title', $seoTitle)) }}">
    <meta name="twitter:description" content="{{ trim($__env->yieldContent('twitter_description', $seoDescription)) }}">
    <meta name="twitter:image" content="{{ $ogImage }}">

    <link rel="alternate" hreflang="en-us" href="https://anbias.com/" />
    <link rel="alternate" hreflang="en-ae" href="https://anbias.com/" />
    <link rel="alternate" hreflang="en-in" href="https://anbias.com/" />
    <link rel="alternate" hreflang="x-default" href="https://anbias.com/" />

    @if (request()->routeIs('home'))
        @include('partials.schema')
    @endif

  <link rel="preconnect" href="https://fonts.googleapis.com"/>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
  <link rel="dns-prefetch" href="//fonts.googleapis.com"/>
  <link rel="dns-prefetch" href="//fonts.gstatic.com"/>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Syne:wght@400;500;600;700;800&family=JetBrains+Mono:wght@300;400;500&display=optional" rel="stylesheet"/>

    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/anbias-logo.svg') }}">
    <link rel="shortcut icon" href="{{ asset('images/anbias-logo.svg') }}">
    @stack('styles')
</head>

<body>
    <x-navbar />

    <main>
        @yield('content')
    </main>

    <x-footer />
    <a href="tel:+918109109960" class="floating-call-btn" aria-label="Call Anbias now">
        <span class="fc-icon">📞</span>
        <span class="fc-text">Call Now</span>
    </a>

    <script defer src="https://cdn.jsdelivr.net/npm/lenis@1.1.20/dist/lenis.min.js"></script>
    <script defer src="{{ asset('js/global.js') }}"></script>

    @stack('scripts')

</body>

</html>
