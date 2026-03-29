<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Anbias | Build Smarter. Ship Faster. Stay Secure.')</title>
    <meta name="description" content="@yield('meta_description', 'Anbias delivers AI-powered web development and web security for ambitious businesses.')">

  <script type="application/ld+json">{"@context":"https://schema.org","@type":"ProfessionalService","name":"Anbias","url":"https://anbias.com","telephone":"+91-8109109960","email":"contact@anbias.com","description":"AI-powered web development, web security & digital solutions","areaServed":["US","IN"],"offers":{"@type":"Offer","name":"Free Website Consultancy","price":"0","priceCurrency":"USD"}}</script>

  <link rel="preconnect" href="https://fonts.googleapis.com"/>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Syne:wght@400;500;600;700;800&family=JetBrains+Mono:wght@300;400;500&display=swap" rel="stylesheet"/>

    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>

    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    @stack('styles')
</head>

<body>
    <x-navbar />

    <main>
        @yield('content')
    </main>

    <x-footer />

    <script src="{{ asset('js/global.js') }}"></script>

    @stack('scripts')

</body>

</html>
