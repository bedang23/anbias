@php
$serviceLinks = [
    'web-development' => 'Web Development',
    'web-security' => 'Web Security / VAPT',
    'ai-development' => 'AI-Powered Development',
    'seo' => 'SEO & Rankings',
    'ecommerce' => 'eCommerce Development',
    'maintenance' => 'Maintenance & Support',
];

$currentServiceSlug = request()->route('slug');
@endphp

<nav id="navbar">
  <a href="{{ route('home') }}" class="nav-logo">
    <img src="{{ asset('images/anbias-logo.svg') }}" alt="Anbias" class="nav-logo-mark">
  </a>

  <ul class="nav-center">
    <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>

    <li class="nav-dropdown">
      <a href="{{ route('services.index') }}" class="nav-dropdown-toggle {{ request()->routeIs('services.*') ? 'active' : '' }}">Services</a>
      <div class="nav-dropdown-menu">
        @foreach($serviceLinks as $slug => $label)
          <a
            href="{{ route('services.show', ['slug' => $slug]) }}"
            class="{{ request()->routeIs('services.show') && $currentServiceSlug === $slug ? 'active' : '' }}"
          >
            {{ $label }}
          </a>
        @endforeach
      </div>
    </li>

    <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
  </ul>

  <div class="nav-right">
    <a href="{{ route('contact') }}" class="nav-pill"><span class="nav-dot"></span>Free Consult</a>
    <div class="hamburger" onclick="toggleMobileNav()"><span></span><span></span><span></span></div>
  </div>
</nav>

<div class="m-nav" id="mNav">
  <a href="{{ route('home') }}" onclick="toggleMobileNav()">Home</a>
  <a href="{{ route('contact') }}" onclick="toggleMobileNav()">Contact</a>

  <div class="m-nav-group-label">Services</div>
  @foreach($serviceLinks as $slug => $label)
    <a href="{{ route('services.show', ['slug' => $slug]) }}" class="m-nav-sub" onclick="toggleMobileNav()">{{ $label }}</a>
  @endforeach

  <a href="{{ route('contact') }}" onclick="toggleMobileNav()" style="color:var(--lime)">Free Consult →</a>
</div>
