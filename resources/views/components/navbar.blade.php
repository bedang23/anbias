<!-- NAV -->
<nav id="navbar">
  <a href="{{ route('home') }}" class="nav-logo">ANBIAS</a>
  <ul class="nav-center">
    <li><a href="{{ route('home') }}">Home</a></li>
    <li><a href="{{ route('home') }}#services">Services</a></li>
    <li><a href="{{ route('home') }}#process">Process</a></li>
    <li><a href="{{ route('home') }}#security">Security</a></li>
    <li><a href="{{ route('home') }}#pricing">Pricing</a></li>
    <li><a href="{{ route('home') }}#faq">FAQ</a></li>
    <li><a href="{{ route('contact') }}">Contact</a></li>
  </ul>
  <div class="nav-right">
    <a href="{{ route('contact') }}" class="nav-pill"><span class="nav-dot"></span>Free Consult</a>
    <div class="hamburger" onclick="toggleMobileNav()"><span></span><span></span><span></span></div>
  </div>
</nav>

<div class="m-nav" id="mNav">
  <a href="{{ route('home') }}" onclick="toggleMobileNav()">Home</a>
  <a href="{{ route('home') }}#services" onclick="toggleMobileNav()">Services</a>
  <a href="{{ route('home') }}#process" onclick="toggleMobileNav()">Process</a>
  <a href="{{ route('home') }}#security" onclick="toggleMobileNav()">Security</a>
  <a href="{{ route('home') }}#pricing" onclick="toggleMobileNav()">Pricing</a>
  <a href="{{ route('contact') }}" onclick="toggleMobileNav()">Contact</a>
  <a href="{{ route('contact') }}" onclick="toggleMobileNav()" style="color:var(--lime)">Free Consult →</a>
</div>
