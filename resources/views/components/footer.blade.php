<footer>
  <div class="footer-inner">
    <div class="footer-top">
      <div>
        <a href="{{ route('home') }}" class="f-logo">
          <img src="{{ asset('images/anbias-logo.svg') }}" alt="Anbias" class="f-logo-mark">
        </a>
        <p class="f-desc">AI-powered web development and security for ambitious businesses. Building the future of the web - one pixel at a time.</p>
        <div class="f-contact">
          <a href="tel:+918109109960">📞 +91 8109109960</a>
          <a href="mailto:contact@anbias.com">✉ contact@anbias.com</a>
        </div>
      </div>

      <div class="f-col">
        <h5>Services</h5>
        <ul>
          <li><a href="{{ route('services.show', ['slug' => 'web-development']) }}">Web Development</a></li>
          <li><a href="{{ route('services.show', ['slug' => 'web-security']) }}">Web Security / VAPT</a></li>
          <li><a href="{{ route('services.show', ['slug' => 'ai-development']) }}">AI-Powered Dev</a></li>
          <li><a href="{{ route('services.show', ['slug' => 'seo']) }}">SEO & Rankings</a></li>
          <li><a href="{{ route('services.show', ['slug' => 'ecommerce']) }}">eCommerce</a></li>
          <li><a href="{{ route('services.show', ['slug' => 'maintenance']) }}">Maintenance</a></li>
        </ul>
      </div>

      <div class="f-col">
        <h5>Company</h5>
        <ul>
          <li><a href="{{ route('about') }}">About Us</a></li>
          <li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
          <li><a href="{{ route('terms') }}">Terms & Conditions</a></li>
        </ul>
      </div>

      <div class="f-col">
        <h5>Contact</h5>
        <ul>
          <li><a href="{{ route('contact') }}">Free Consultation</a></li>
          <li><a href="mailto:contact@anbias.com">Email Us</a></li>
          <li><a href="tel:+918109109960">Call / WhatsApp</a></li>
          <li><a href="{{ route('sitemap') }}">Browse Sitemap</a></li>
        </ul>
      </div>
    </div>

    <div class="footer-bottom">
      <span>© {{ now()->year }} ALL RIGHTS RESERVED.</span>
      <span><a href="{{ route('privacy') }}">PRIVACY</a> · <a href="{{ route('terms') }}">TERMS</a> · <a href="{{ route('sitemap') }}">SITEMAP</a></span>
      <span>MADE WITH AI IN INDIA 🇮🇳</span>
    </div>
  </div>
</footer>
