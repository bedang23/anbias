@extends('layouts.app')

@section('title', 'Anbias | AI-Powered Web Development & Security')
@section('meta_description', 'Build smarter, ship faster, and stay secure with Anbias. AI-powered web development and cybersecurity solutions for global businesses.')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

@push('scripts')
<script defer src="{{ asset('js/home.js') }}"></script>
@endpush

@section('content')
<!-- HERO -->
<section class="hero" id="home">
  <div class="hero-grid-lines"></div>
  <div class="hero-scan"></div>
  <div class="hero-bg-num">4×</div>

  <div class="hero-inner">
    <div class="hero-eyebrow">
      <span class="dash"></span>
      AI-Powered Web Studio
      <span class="blink">_</span>
      EST. 2024 — IND/USA
    </div>

    <h1 class="hero-title">
      Build<br>
      <span class="line-lime">Smarter.</span>
      <span class="line-outline">Ship Faster.</span>
    </h1>

    <div class="hero-bottom">
      <p class="hero-desc">
        We design, develop & secure digital products using AI — delivering unique, 
        error-free solutions at <strong>¼ the time</strong> of traditional agencies. 
        Serving startups and enterprises across the US and India.
      </p>
      <div class="hero-stats-row">
        <div class="hstat">
          <div class="hstat-num">150<span>+</span></div>
          <div class="hstat-label">Projects Delivered</div>
        </div>
        <div class="hstat">
          <div class="hstat-num">4<span>×</span></div>
          <div class="hstat-label">Faster with AI</div>
        </div>
        <div class="hstat">
          <div class="hstat-num">96<span>%</span></div>
          <div class="hstat-label">Bug-Free Deploys</div>
        </div>
      </div>
      <div class="hero-cta-group">
        <a href="#consult" class="btn-lime">
          Free Consultancy
          <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M2 7h10M8 3l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
        <a href="#services" class="btn-ghost">Explore Services →</a>
      </div>
    </div>
  </div>

  <div class="scroll-hint">
    <div class="scroll-line"></div>
    scroll
  </div>
</section>

<!-- MARQUEE -->
<div class="marquee-wrap">
  <div class="marquee-track2" id="mtrack">
    <span class="marquee-item2"><span class="dot2"></span>Web Development</span>
    <span class="marquee-item2"><span class="dot2"></span>Web Security</span>
    <span class="marquee-item2"><span class="dot2"></span>AI-Powered Development</span>
    <span class="marquee-item2"><span class="dot2"></span>Free Consultancy</span>
    <span class="marquee-item2"><span class="dot2"></span>VAPT & Pentesting</span>
    <span class="marquee-item2"><span class="dot2"></span>SEO & Rankings</span>
    <span class="marquee-item2"><span class="dot2"></span>React & Next.js</span>
    <span class="marquee-item2"><span class="dot2"></span>eCommerce</span>
    <span class="marquee-item2"><span class="dot2"></span>US & India Clients</span>
    <span class="marquee-item2"><span class="dot2"></span>OWASP Compliance</span>
    <span class="marquee-item2"><span class="dot2"></span>Web Development</span>
    <span class="marquee-item2"><span class="dot2"></span>Web Security</span>
    <span class="marquee-item2"><span class="dot2"></span>AI-Powered Development</span>
    <span class="marquee-item2"><span class="dot2"></span>Free Consultancy</span>
    <span class="marquee-item2"><span class="dot2"></span>VAPT & Pentesting</span>
    <span class="marquee-item2"><span class="dot2"></span>SEO & Rankings</span>
    <span class="marquee-item2"><span class="dot2"></span>React & Next.js</span>
    <span class="marquee-item2"><span class="dot2"></span>eCommerce</span>
    <span class="marquee-item2"><span class="dot2"></span>US & India Clients</span>
    <span class="marquee-item2"><span class="dot2"></span>OWASP Compliance</span>
  </div>
</div>

<!-- SERVICES -->
<section id="services">
  <div class="container">
    <div class="rv">
      <div class="s-label"><span class="s-num">01 —</span> What We Do</div>
      <h2 class="s-title">Every Pixel.<br><span class="ol">Every Line.</span><br>Every Threat.</h2>
      <p class="s-sub">Full-spectrum digital expertise — from pixel-perfect interfaces to airtight security, all powered by AI precision.</p>
    </div>

    <div class="services-layout rv d1">
      <div class="services-sidebar">
        <div class="srv-tab active" onclick="switchTab(event, 'dev')">
          <div class="srv-tab-icon">💻</div>
          <div class="srv-tab-text"><h4>Web Development</h4><p>React, Next.js, WordPress & more</p></div>
        </div>
        <div class="srv-tab" onclick="switchTab(event, 'sec')">
          <div class="srv-tab-icon">🛡️</div>
          <div class="srv-tab-text"><h4>Web Security</h4><p>VAPT, pentesting, hardening</p></div>
        </div>
        <div class="srv-tab" onclick="switchTab(event, 'ai')">
          <div class="srv-tab-icon">🤖</div>
          <div class="srv-tab-text"><h4>AI-Powered Dev</h4><p>4× faster, zero errors</p></div>
        </div>
        <div class="srv-tab" onclick="switchTab(event, 'seo')">
          <div class="srv-tab-icon">📈</div>
          <div class="srv-tab-text"><h4>SEO & Rankings</h4><p>US & India market optimized</p></div>
        </div>
        <div class="srv-tab" onclick="switchTab(event, 'ecom')">
          <div class="srv-tab-icon">🛒</div>
          <div class="srv-tab-text"><h4>eCommerce</h4><p>Shopify, WooCommerce & headless</p></div>
        </div>
        <div class="srv-tab" onclick="switchTab(event, 'maint')">
          <div class="srv-tab-icon">🔧</div>
          <div class="srv-tab-text"><h4>Maintenance</h4><p>Retainer & support plans</p></div>
        </div>
      </div>

      <div id="panel-dev" class="services-panel active">
        <span class="panel-tag">Core Service — #01</span>
        <h3 class="panel-title">Web Development<br>That Converts</h3>
        <p class="panel-desc">We build fast, accessible, and beautiful websites and web apps tailored to your business goals. AI tools eliminate bugs and accelerate delivery by 4×. Every project ships with clean code and Lighthouse scores above 90.</p>
        <div class="panel-features">
          <div class="panel-feat"><span class="feat-check">✓</span><p>React / Next.js / Node.js applications</p></div>
          <div class="panel-feat"><span class="feat-check">✓</span><p>WordPress, Webflow & CMS builds</p></div>
          <div class="panel-feat"><span class="feat-check">✓</span><p>Mobile-first, WCAG accessible design</p></div>
          <div class="panel-feat"><span class="feat-check">✓</span><p>API integrations & third-party services</p></div>
          <div class="panel-feat"><span class="feat-check">✓</span><p>Performance & Core Web Vitals tuning</p></div>
          <div class="panel-feat"><span class="feat-check">✓</span><p>Deployment, CI/CD & DevOps setup</p></div>
        </div>
        <a href="#consult" class="panel-cta">Start a project → </a>
      </div>

      <div id="panel-sec" class="services-panel">
        <span class="panel-tag">Security — #02</span>
        <h3 class="panel-title">Web Security<br>& VAPT</h3>
        <p class="panel-desc">Identify vulnerabilities before attackers do. We run thorough penetration testing, OWASP audits, and security hardening for web apps — following NIST, OWASP, and PTES standards.</p>
        <div class="panel-features">
          <div class="panel-feat"><span class="feat-check">✓</span><p>OWASP Top 10 vulnerability assessment</p></div>
          <div class="panel-feat"><span class="feat-check">✓</span><p>Manual penetration testing by experts</p></div>
          <div class="panel-feat"><span class="feat-check">✓</span><p>SSL, DNS & infrastructure hardening</p></div>
          <div class="panel-feat"><span class="feat-check">✓</span><p>Detailed VAPT report with remediation</p></div>
          <div class="panel-feat"><span class="feat-check">✓</span><p>GDPR, PCI-DSS & DPDP Act guidance</p></div>
          <div class="panel-feat"><span class="feat-check">✓</span><p>Ongoing monthly security monitoring</p></div>
        </div>
        <a href="#consult" class="panel-cta">Book a security audit → </a>
      </div>

      <div id="panel-ai" class="services-panel">
        <span class="panel-tag">AI Edge — #03</span>
        <h3 class="panel-title">AI-Powered<br>Development</h3>
        <p class="panel-desc">We use the latest AI models to generate unique design concepts, write near-zero-error code, and cut timelines to a fraction of traditional agencies — without sacrificing quality.</p>
        <div class="panel-features">
          <div class="panel-feat"><span class="feat-check">✓</span><p>Unique AI-generated design concepts</p></div>
          <div class="panel-feat"><span class="feat-check">✓</span><p>AI-assisted boilerplate & logic code</p></div>
          <div class="panel-feat"><span class="feat-check">✓</span><p>Automated QA & error detection</p></div>
          <div class="panel-feat"><span class="feat-check">✓</span><p>SEO content at scale</p></div>
          <div class="panel-feat"><span class="feat-check">✓</span><p>Human senior review on every output</p></div>
          <div class="panel-feat"><span class="feat-check">✓</span><p>Delivery in ¼ the traditional timeline</p></div>
        </div>
        <a href="#consult" class="panel-cta">See how it works → </a>
      </div>

      <div id="panel-seo" class="services-panel">
        <span class="panel-tag">Growth — #04</span>
        <h3 class="panel-title">SEO &<br>Rankings</h3>
        <p class="panel-desc">Technical SEO, on-page optimization, and content strategy built for both US and Indian search markets — driving organic traffic that actually converts into revenue.</p>
        <div class="panel-features">
          <div class="panel-feat"><span class="feat-check">✓</span><p>Technical SEO & Core Web Vitals</p></div>
          <div class="panel-feat"><span class="feat-check">✓</span><p>US & India keyword research</p></div>
          <div class="panel-feat"><span class="feat-check">✓</span><p>Schema markup & structured data</p></div>
          <div class="panel-feat"><span class="feat-check">✓</span><p>Content strategy & SEO writing</p></div>
          <div class="panel-feat"><span class="feat-check">✓</span><p>Monthly ranking & traffic reports</p></div>
          <div class="panel-feat"><span class="feat-check">✓</span><p>Local SEO for Indian & US markets</p></div>
        </div>
        <a href="#consult" class="panel-cta">Boost your rankings → </a>
      </div>

      <div id="panel-ecom" class="services-panel">
        <span class="panel-tag">eCommerce — #05</span>
        <h3 class="panel-title">eCommerce<br>Development</h3>
        <p class="panel-desc">Shopify, WooCommerce, or headless commerce — we build storefronts optimized for conversions with secure payment integrations and inventory systems tailored to your market.</p>
        <div class="panel-features">
          <div class="panel-feat"><span class="feat-check">✓</span><p>Shopify & WooCommerce development</p></div>
          <div class="panel-feat"><span class="feat-check">✓</span><p>Headless & custom eCommerce builds</p></div>
          <div class="panel-feat"><span class="feat-check">✓</span><p>Payment gateway integrations</p></div>
          <div class="panel-feat"><span class="feat-check">✓</span><p>Conversion rate optimization (CRO)</p></div>
          <div class="panel-feat"><span class="feat-check">✓</span><p>Inventory & order management</p></div>
          <div class="panel-feat"><span class="feat-check">✓</span><p>Cross-border US/India selling setup</p></div>
        </div>
        <a href="#consult" class="panel-cta">Launch your store → </a>
      </div>

      <div id="panel-maint" class="services-panel">
        <span class="panel-tag">Support — #06</span>
        <h3 class="panel-title">Maintenance<br>& Retainers</h3>
        <p class="panel-desc">Monthly retainer plans to keep your site fast, secure, and up-to-date — so you never have to worry about it again. We act as your dedicated technical team.</p>
        <div class="panel-features">
          <div class="panel-feat"><span class="feat-check">✓</span><p>24/7 uptime monitoring & alerts</p></div>
          <div class="panel-feat"><span class="feat-check">✓</span><p>Weekly security scans</p></div>
          <div class="panel-feat"><span class="feat-check">✓</span><p>Plugin & dependency updates</p></div>
          <div class="panel-feat"><span class="feat-check">✓</span><p>Monthly performance reports</p></div>
          <div class="panel-feat"><span class="feat-check">✓</span><p>Priority support & bug fixes</p></div>
          <div class="panel-feat"><span class="feat-check">✓</span><p>Dedicated Slack / WhatsApp channel</p></div>
        </div>
        <a href="#consult" class="panel-cta">Get ongoing support → </a>
      </div>
    </div>
  </div>
</section>

<!-- FREE CONSULTANCY -->
<div class="consult-sec" id="consult">
  <div class="container">
    <div class="consult-grid">
      <div class="rv">
        <div class="s-label"><span class="s-num">02 —</span> Free Offer</div>
        <h2 class="s-title">Your Free<br><span class="ol">Website</span><br>Consultancy.</h2>
        <p class="s-sub">No sales pitch. Just a real, expert conversation about your website — what's working, what's not, and a clear roadmap forward.</p>
        <div class="perks-list">
          <div class="perk-row">
            <div class="perk-num">01</div>
            <div class="perk-body">
              <h4>Performance Deep-Dive</h4>
              <p>We analyze Core Web Vitals, load time, mobile UX, and give you a prioritized fix list — free.</p>
            </div>
          </div>
          <div class="perk-row">
            <div class="perk-num">02</div>
            <div class="perk-body">
              <h4>SEO Health Check</h4>
              <p>Identify ranking gaps and technical SEO blockers keeping you off Google's first page.</p>
            </div>
          </div>
          <div class="perk-row">
            <div class="perk-num">03</div>
            <div class="perk-body">
              <h4>Security Surface Review</h4>
              <p>High-level check for exposed vulnerabilities — outdated plugins, SSL issues, admin panels.</p>
            </div>
          </div>
          <div class="perk-row">
            <div class="perk-num">04</div>
            <div class="perk-body">
              <h4>Custom Growth Roadmap</h4>
              <p>Leave with an actionable plan you can execute immediately — whether you hire us or not.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="consult-form-wrap rv d2">
        <div class="cf-title">Book Your<br>Free Session</div>
        <p class="cf-sub">Takes 2 minutes. We respond within 24 hours.</p>
        <form onsubmit="submitForm2(event)">
          <div class="form-row2">
            <div class="fg"><label>First Name</label><input type="text" placeholder="Rahul" required/></div>
            <div class="fg"><label>Last Name</label><input type="text" placeholder="Sharma"/></div>
          </div>
          <div class="fg"><label>Business Email</label><input type="email" placeholder="you@company.com" required/></div>
          <div class="fg"><label>Phone / WhatsApp</label><input type="tel" placeholder="+1 or +91..."/></div>
          <div class="fg"><label>Your Website URL</label><input type="url" placeholder="https://yoursite.com"/></div>
          <div class="fg">
            <label>Main Challenge</label>
            <select>
              <option value="">Select one...</option>
              <option>Website is slow or outdated</option>
              <option>Poor Google rankings</option>
              <option>Security concerns</option>
              <option>Need a new website</option>
              <option>Building a web app</option>
              <option>eCommerce setup</option>
            </select>
          </div>
          <div class="fg"><label>Anything else?</label><textarea placeholder="Tell us about your project..."></textarea></div>
          <button type="submit" class="form-submit2">Book Free Consultancy →</button>
          <p class="form-note2">🔒 Private. No spam. No commitment.</p>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- PROCESS -->
<section id="process">
  <div class="container">
    <div class="rv" style="text-align:center">
      <div class="s-label" style="justify-content:center"><span class="s-num">03 —</span> How We Work</div>
      <h2 class="s-title" style="text-align:center">Idea to Live<br><span class="ol">In Record Time.</span></h2>
      <p class="s-sub" style="text-align:center;margin:0 auto 0">Our AI-augmented workflow means fewer revisions, faster builds, and cleaner code — every time.</p>
    </div>
    <div class="process-steps rv d1">
      <div class="ps-card">
        <div class="ps-num">01</div>
        <div class="ps-icon">🎯</div>
        <h4>Discovery & Strategy</h4>
        <p>We start with your goals — audience, competitors, conversion targets. Our free consultancy doubles as the discovery session.</p>
        <div class="ps-arrow">→</div>
      </div>
      <div class="ps-card">
        <div class="ps-num">02</div>
        <div class="ps-icon">🎨</div>
        <h4>AI-Powered Design</h4>
        <p>AI design tools + human creative direction produce unique wireframes and visual systems in days — not weeks.</p>
        <div class="ps-arrow">→</div>
      </div>
      <div class="ps-card">
        <div class="ps-num">03</div>
        <div class="ps-icon">⚙️</div>
        <h4>Build & QA</h4>
        <p>AI-written code reviewed by senior devs, stress-tested and cross-browser validated before a single pixel goes live.</p>
        <div class="ps-arrow">→</div>
      </div>
      <div class="ps-card">
        <div class="ps-num">04</div>
        <div class="ps-icon">🚀</div>
        <h4>Launch & Support</h4>
        <p>We handle deployment, performance optimization, and post-launch security checks — then stay on as your tech partner.</p>
      </div>
    </div>
  </div>
</section>

<!-- AI SECTION -->
<section class="ai-sec" id="ai">
  <div class="container">
    <div class="ai-layout">
      <div class="rv">
        <div class="s-label"><span class="s-num">04 —</span> The AI Edge</div>
        <h2 class="s-title">Why AI Makes<br><span class="ol">Us Different.</span></h2>
        <p class="s-sub">Most agencies write code the same way they did in 2015. We leverage the latest AI models to generate context-aware designs and near-zero-error codebases — shipping at ¼ the traditional cost and timeline.</p>
        <div class="ai-metrics">
          <div class="ai-metric"><div class="am-val">4×</div><div class="am-label">Faster Delivery</div></div>
          <div class="ai-metric"><div class="am-val">96%</div><div class="am-label">Bug-Free</div></div>
          <div class="ai-metric"><div class="am-val">60%</div><div class="am-label">Cost Savings</div></div>
        </div>
        <div style="margin-top:36px">
          <a href="#consult" class="btn-lime">Start a Project →</a>
        </div>
      </div>
      <div class="rv d2">
        <div class="ai-terminal">
          <div class="terminal-bar">
            <div class="tb-dot" style="background:#FF5F56"></div>
            <div class="tb-dot" style="background:#FFBD2E"></div>
            <div class="tb-dot" style="background:#27C93F"></div>
            <span class="tb-title">anbias-ai-workflow.sh</span>
          </div>
          <div class="terminal-body">
            <div class="t-line"><span class="t-prompt">$</span> <span class="t-cmd">anbias init --client="Acme Corp"</span></div>
            <div class="t-line t-out">▸ Analyzing business requirements...</div>
            <div class="t-line t-out success">✓ Strategy brief generated</div>
            <div class="t-line">&nbsp;</div>
            <div class="t-line"><span class="t-prompt">$</span> <span class="t-cmd">anbias design --ai --unique</span></div>
            <div class="t-line t-out">▸ Generating unique design concepts...</div>
            <div class="t-line t-out success">✓ 3 design systems created</div>
            <div class="t-line">&nbsp;</div>
            <div class="t-line"><span class="t-prompt">$</span> <span class="t-cmd">anbias build --target=production</span></div>
            <div class="t-line t-out">▸ AI writing components...</div>
            <div class="t-line t-out">▸ Senior dev review pass...</div>
            <div class="t-line t-out warn">⚡ Timeline: 1/4 of traditional</div>
            <div class="t-line t-out success">✓ Build complete — 0 errors</div>
            <div class="t-line">&nbsp;</div>
            <div class="t-line"><span class="t-prompt">$</span> <span class="t-cmd">anbias deploy --secure</span></div>
            <div class="t-line t-out success">✓ Live at anbias.com <span class="t-cursor"></span></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SECURITY -->
<section class="sec-sec" id="security">
  <div class="container">
    <div class="rv">
      <div class="s-label"><span class="s-num">05 —</span> Web Security</div>
      <h2 class="s-title">Your Website<br>Is A Target.<br><span class="ol">We Protect It.</span></h2>
      <p class="s-sub">From OWASP audits to full penetration testing — our security team ensures your infrastructure stays resilient against evolving threats.</p>
    </div>
    <div class="security-grid rv d1">
      <div class="sc-card sc-big">
        <span class="sc-tag">VAPT & Pentesting</span>
        <div class="sc-icon">🔐</div>
        <h3>Complete Web Application Security</h3>
        <p>We combine automated scanning with manual expert analysis to deliver thorough VAPT reports with actionable remediation steps. Trusted by FinTech, HealthTech, and SaaS companies across the US and India.</p>
        <ul class="sc-list">
          <li>OWASP Top 10 — SQL injection, XSS, IDOR, broken auth</li>
          <li>SSL/TLS configuration & certificate audit</li>
          <li>API security & authentication review</li>
          <li>Compliance: GDPR, PCI-DSS, India DPDP Act</li>
        </ul>
      </div>
      <div class="sc-card">
        <div class="sc-icon">🕷️</div>
        <h3>OWASP Top 10 Audit</h3>
        <p>Thorough review of injection flaws, broken authentication, XSS, IDOR, and all critical OWASP vulnerabilities with a detailed findings report.</p>
      </div>
      <div class="sc-card">
        <div class="sc-icon">🌐</div>
        <h3>Infrastructure Check</h3>
        <p>End-to-end TLS configuration, DNS hardening, security headers analysis, and server exposure mapping.</p>
      </div>
      <div class="sc-card">
        <div class="sc-icon">📋</div>
        <h3>Compliance Guidance</h3>
        <p>Helping your business meet GDPR, ISO 27001, PCI-DSS, and India's DPDP Act — keeping you legally protected.</p>
      </div>
      <div class="sc-card">
        <div class="sc-icon">🔄</div>
        <h3>Ongoing Monitoring</h3>
        <p>Monthly security scans and instant alerts if suspicious activity is detected — proactive protection 24/7.</p>
      </div>
    </div>
  </div>
</section>

<!-- TESTIMONIALS -->
<section class="testi-sec" id="trust">
  <div class="container">
    <div class="rv" style="text-align:center">
      <div class="s-label" style="justify-content:center"><span class="s-num">06 —</span> Client Stories</div>
      <h2 class="s-title" style="text-align:center">Trusted Across<br><span class="ol">2 Continents.</span></h2>
    </div>
    <div class="testi-grid">
      <div class="testi-card rv d1">
        <div class="testi-stars">★★★★★</div>
        <div class="testi-quote-mark">"</div>
        <p class="testi-text">Anbias redesigned our SaaS dashboard and cut load time from 8 seconds to under 1.2s. The AI-assisted development was noticeably faster — we launched 3 weeks ahead of schedule.</p>
        <div class="testi-author">
          <div class="testi-av">JM</div>
          <div><div class="testi-name">James Mitchell</div><div class="testi-role">CTO — NovaTech, San Francisco USA</div></div>
        </div>
      </div>
      <div class="testi-card rv d2">
        <div class="testi-stars">★★★★★</div>
        <div class="testi-quote-mark">"</div>
        <p class="testi-text">Their VAPT report uncovered 4 critical vulnerabilities in our payment flow we had no idea about. The remediation guidance was clear and their team helped us fix everything within a week.</p>
        <div class="testi-author">
          <div class="testi-av">PS</div>
          <div><div class="testi-name">Priya Sharma</div><div class="testi-role">Founder — FinEdge, Bangalore India</div></div>
        </div>
      </div>
      <div class="testi-card rv d3">
        <div class="testi-stars">★★★★★</div>
        <div class="testi-quote-mark">"</div>
        <p class="testi-text">We went from page 6 to page 1 on Google for our top 3 keywords within 4 months. Anbias's SEO strategy was completely calibrated for both our Indian and US audiences.</p>
        <div class="testi-author">
          <div class="testi-av">AK</div>
          <div><div class="testi-name">Arjun Kapoor</div><div class="testi-role">Marketing Director — TradeLink, Mumbai</div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- WHY ANBIAS -->
<section id="why">
  <div class="container">
    <div class="why-layout">
      <div class="rv">
        <div class="s-label"><span class="s-num">07 —</span> Why Anbias</div>
        <h2 class="s-title">Built Different.<br><span class="ol">On Purpose.</span></h2>
        <div class="why-items">
          <div class="why-item">
            <div class="wi-num">01</div>
            <div class="wi-icon">🤖</div>
            <div class="wi-text"><h4>AI-First, Human-Reviewed</h4><p>We don't use AI to cut corners — we use it to go further. Every AI output is validated by experienced developers who understand what quality truly looks like.</p></div>
          </div>
          <div class="why-item">
            <div class="wi-num">02</div>
            <div class="wi-icon">🌍</div>
            <div class="wi-text"><h4>Dual-Market Expertise</h4><p>We understand what converts in Dallas and what converts in Delhi. Our strategies are calibrated for both US and Indian audiences — not one-size-fits-all.</p></div>
          </div>
          <div class="why-item">
            <div class="wi-num">03</div>
            <div class="wi-icon">💸</div>
            <div class="wi-text"><h4>Agency Quality, Startup Pricing</h4><p>India-based operations mean Fortune-500 level quality at a fraction of what US agencies charge — without sacrificing a single pixel.</p></div>
          </div>
          <div class="why-item">
            <div class="wi-num">04</div>
            <div class="wi-icon">🔐</div>
            <div class="wi-text"><h4>Security Baked In</h4><p>Security isn't an add-on — it's in our development DNA. Every site ships with secure headers, encrypted storage, and OWASP compliance by default.</p></div>
          </div>
        </div>
      </div>
      <div class="why-visual rv d2">
        <div class="why-stat-block">
          <div class="why-big-stat">150+</div>
          <div class="why-stat-label">Projects delivered across the US, India & beyond</div>
        </div>
        <div class="why-stat-block">
          <div class="why-big-stat">4×</div>
          <div class="why-stat-label">Faster than traditional agencies — thanks to AI-powered workflows</div>
        </div>
        <div class="why-tags">
          <span class="wtag">React</span>
          <span class="wtag">Next.js</span>
          <span class="wtag">Node.js</span>
          <span class="wtag">WordPress</span>
          <span class="wtag">Shopify</span>
          <span class="wtag">OWASP</span>
          <span class="wtag">VAPT</span>
          <span class="wtag">SEO</span>
          <span class="wtag">AWS</span>
          <span class="wtag">Vercel</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- PRICING -->
<section class="pricing-sec" id="pricing">
  <div class="container">
    <div class="rv" style="text-align:center">
      <div class="s-label" style="justify-content:center"><span class="s-num">08 —</span> Pricing</div>
      <h2 class="s-title" style="text-align:center">Simple Plans.<br><span class="ol">No Surprises.</span></h2>
      <p class="s-sub" style="text-align:center;margin:0 auto">All plans include a free consultancy before you commit to anything.</p>
    </div>
    <div class="pricing-grid2">
      <div class="pc rv d1">
        <div class="pc-tier">Starter</div>
        <div class="pc-price"><sup>$</sup>499</div>
        <div class="pc-freq">one-time / from</div>
        <ul class="pc-list">
          <li><span class="ck">✓</span> 5-page responsive website</li>
          <li><span class="ck">✓</span> Mobile-first design</li>
          <li><span class="ck">✓</span> Basic SEO setup</li>
          <li><span class="ck">✓</span> Contact form & integrations</li>
          <li><span class="ck">✓</span> SSL & security headers</li>
          <li><span class="ck">✓</span> 30-day post-launch support</li>
        </ul>
        <a href="#consult" class="pc-cta">Get Started</a>
      </div>
      <div class="pc featured rv d2">
        <span class="pc-badge">Most Popular</span>
        <div class="pc-tier">Growth</div>
        <div class="pc-price"><sup>$</sup>1,299</div>
        <div class="pc-freq">one-time / from</div>
        <ul class="pc-list">
          <li><span class="ck">✓</span> Up to 15-page web application</li>
          <li><span class="ck">✓</span> Custom UI/UX design</li>
          <li><span class="ck">✓</span> Advanced SEO + schema markup</li>
          <li><span class="ck">✓</span> CMS integration</li>
          <li><span class="ck">✓</span> VAPT security audit</li>
          <li><span class="ck">✓</span> Performance optimization</li>
          <li><span class="ck">✓</span> 90-day post-launch support</li>
        </ul>
        <a href="#consult" class="pc-cta">Get Started</a>
      </div>
      <div class="pc rv d3">
        <div class="pc-tier">Enterprise</div>
        <div class="pc-price">Custom</div>
        <div class="pc-freq">tailored to your needs</div>
        <ul class="pc-list">
          <li><span class="ck">✓</span> Complex web applications</li>
          <li><span class="ck">✓</span> Dedicated project manager</li>
          <li><span class="ck">✓</span> Full VAPT + compliance</li>
          <li><span class="ck">✓</span> White-label options</li>
          <li><span class="ck">✓</span> Priority 24/7 support</li>
          <li><span class="ck">✓</span> Ongoing retainer available</li>
        </ul>
        <a href="#consult" class="pc-cta">Talk to Us</a>
      </div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section id="faq">
  <div class="container">
    <div class="rv" style="text-align:center">
      <div class="s-label" style="justify-content:center"><span class="s-num">09 —</span> FAQ</div>
      <h2 class="s-title" style="text-align:center">Questions We Get<br><span class="ol">All The Time.</span></h2>
    </div>
    <div class="faq2 rv">
      <div class="faq2-item">
        <button class="faq2-q" onclick="toggleFaq2(this)">Is the free consultancy really free?<span class="faq2-icon">+</span></button>
        <div class="faq2-a"><p>Yes — 100% free. No credit card, no contracts, no pressure. We believe in earning your trust before asking for your business. Our consultancy is a genuine service where we review your site and give you real, actionable feedback.</p></div>
      </div>
      <div class="faq2-item">
        <button class="faq2-q" onclick="toggleFaq2(this)">How do you use AI in development?<span class="faq2-icon">+</span></button>
        <div class="faq2-a"><p>We use AI at every stage — for generating unique design concepts, writing code, auto-testing for errors, and creating SEO content. Everything is reviewed and refined by senior developers, so you get the speed of AI with the quality of human expertise.</p></div>
      </div>
      <div class="faq2-item">
        <button class="faq2-q" onclick="toggleFaq2(this)">Do you work with US clients despite being India-based?<span class="faq2-icon">+</span></button>
        <div class="faq2-a"><p>Absolutely. Roughly half our clients are US-based. We offer flexible scheduling for EST, CST, and PST time zones and communicate fluently in English. Many clients find our India base a major advantage — high quality at competitive pricing.</p></div>
      </div>
      <div class="faq2-item">
        <button class="faq2-q" onclick="toggleFaq2(this)">How long does a typical project take?<span class="faq2-icon">+</span></button>
        <div class="faq2-a"><p>A standard 5–8 page website takes 7–14 days thanks to our AI workflow. Complex web applications typically ship in 4–8 weeks. We'll give a precise timeline after the discovery call.</p></div>
      </div>
      <div class="faq2-item">
        <button class="faq2-q" onclick="toggleFaq2(this)">What is VAPT and do I need it?<span class="faq2-icon">+</span></button>
        <div class="faq2-a"><p>VAPT stands for Vulnerability Assessment and Penetration Testing. If your site handles user data, payments, or logins, you need it. We recommend it for every business with more than 500 monthly users.</p></div>
      </div>
      <div class="faq2-item">
        <button class="faq2-q" onclick="toggleFaq2(this)">What industries do you specialize in?<span class="faq2-icon">+</span></button>
        <div class="faq2-a"><p>We've worked across SaaS, FinTech, eCommerce, HealthTech, EdTech, real estate, and professional services. Our AI tools allow us to rapidly absorb new domains regardless of your niche.</p></div>
      </div>
    </div>
  </div>
</section>

<!-- FOOTER CTA -->
<div class="fcta">
  <div class="fcta-eyebrow">// Ready to build? Let's talk.</div>
  <h2 class="fcta-title">
    Start<br>
    <span class="ol">Something</span><br>
    Extraordinary.
  </h2>
  <p class="fcta-sub">Join 150+ businesses across the US and India who chose Anbias. Let's start with a free conversation.</p>
  <div class="fcta-btns">
    <a href="#consult" class="btn-lime">Book Free Consultancy</a>
    <a href="mailto:contact@anbias.com" class="btn-ghost">contact@anbias.com</a>
  </div>
</div>
@endsection
