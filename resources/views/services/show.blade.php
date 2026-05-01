@extends('layouts.app')

@section('title', $service['meta_title'])
@section('meta_description', $service['meta_description'])

@push('styles')
<link rel="stylesheet" href="{{ asset('css/service-page.css') }}">
@endpush

@push('scripts')
<script defer src="{{ asset('js/service-page.js') }}"></script>
@endpush

@php
$serviceMeta = [
    'web-development' => [
        'icon' => '💻',
        'label' => 'Development — #01',
        'title' => 'Web Development',
        'desc' => 'Production-grade websites and web apps built for speed, conversions, and long-term maintainability.',
    ],
    'web-security' => [
        'icon' => '🛡️',
        'label' => 'Security — #02',
        'title' => 'Web Security & VAPT',
        'desc' => 'Penetration testing, OWASP audits, and hardening for businesses that handle sensitive data.',
    ],
    'ai-development' => [
        'icon' => '🤖',
        'label' => 'AI — #03',
        'title' => 'AI-Powered Dev',
        'desc' => 'AI-assisted delivery pipelines with senior engineering review for faster and cleaner releases.',
    ],
    'seo' => [
        'icon' => '📈',
        'label' => 'SEO — #04',
        'title' => 'SEO & Rankings',
        'desc' => 'Technical SEO, content structure, and visibility growth across competitive US and India markets.',
    ],
    'ecommerce' => [
        'icon' => '🛒',
        'label' => 'Commerce — #05',
        'title' => 'eCommerce Development',
        'desc' => 'Shopify, WooCommerce, and custom commerce systems engineered for conversion and scale.',
    ],
    'maintenance' => [
        'icon' => '🔧',
        'label' => 'Support — #06',
        'title' => 'Maintenance & Support',
        'desc' => 'Proactive updates, security monitoring, and operational support to keep your site stable.',
    ],
];
@endphp

@section('content')
<div class="breadcrumb">
  <a href="{{ route('home') }}">Home</a>
  <span class="sep">/</span>
  <a href="{{ route('services.index') }}">Services</a>
  <span class="sep">/</span>
  <span class="current">{{ $service['name'] }}</span>
</div>

<section class="hero" id="home">
  <div class="hero-grid-lines"></div>
  <div class="hero-scan"></div>
  <div class="hero-bg-bracket">{&nbsp;}</div>

  <div class="hero-tech-float">
    @foreach($service['badges'] as $badge)
      <div class="tech-badge">
        <span class="tb-dot"></span>{{ $badge['label'] }}
        <span class="tb-version">{{ $badge['version'] }}</span>
      </div>
    @endforeach
  </div>

  <div class="hero-inner">
    <div class="hero-eyebrow">
      <span class="dash"></span>
      {{ $service['eyebrow'] }}
      <span class="blink">_</span>
      {{ $service['eyebrow_tail'] }}
    </div>

    <h1 class="hero-title">
      {{ $service['line_one'] }}<br>
      <span class="line-lime">{{ $service['line_lime'] }}</span>
      <span class="line-outline">{{ $service['line_outline'] }}</span>
    </h1>

    <div class="hero-bottom">
      <p class="hero-desc">{{ $service['hero_desc'] }}</p>
      <div class="hero-stats-row">
        @foreach($service['stats'] as $stat)
          <div class="hstat">
            @if(($stat['suffix'] ?? '') !== '')
              <div class="hstat-num">{{ $stat['value'] }}<span>{{ $stat['suffix'] }}</span></div>
            @else
              <div class="hstat-num">{{ $stat['value'] }}</div>
            @endif
            <div class="hstat-label">{{ $stat['label'] }}</div>
          </div>
        @endforeach
      </div>
      <div class="hero-cta-group">
        <a href="#consult" class="btn-lime">
          {{ $service['consult_label'] }}
          <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M2 7h10M8 3l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
        <a href="#what-we-build" class="btn-ghost">{{ $service['secondary_cta'] }} →</a>
      </div>
    </div>
  </div>

  <div class="scroll-hint">
    <div class="scroll-line"></div>
    scroll
  </div>
</section>

<div class="marquee-wrap">
  <div class="marquee-track2">
    @for($i = 0; $i < 2; $i++)
      @foreach($service['marquee'] as $item)
        <span class="marquee-item2"><span class="dot2"></span>{{ $item }}</span>
      @endforeach
    @endfor
  </div>
</div>

<section class="stack-sec" id="what-we-build">
  <div class="container">
    <div class="rv">
      <div class="s-label"><span class="s-num">01 —</span> What We Build</div>
      <h2 class="s-title">Every Type of<br><span class="ol">Web Product.</span></h2>
      <p class="s-sub">From marketing sites to complex SaaS platforms - if it runs in a browser, we engineer it with precision.</p>
    </div>

    <div class="stack-grid rv d1">
      <div class="stack-card featured-card span2">
        <div class="featured-card-inner">
          <div>
            <div class="sc-num">01</div>
            <div class="sc-icon-wrap">🚀</div>
            <h3>Custom Web Applications</h3>
            <p>Complex, data-driven web apps built on modern frameworks. Dashboards, SaaS tools, marketplaces, portals - engineered for scale from day one with clean architecture and tested codebases.</p>
          </div>
          <div>
            <div class="stack-tags" style="margin-top:0; margin-bottom: 20px;">
              <span class="stag active">React</span>
              <span class="stag active">Next.js</span>
              <span class="stag active">Node.js</span>
              <span class="stag">TypeScript</span>
              <span class="stag">GraphQL</span>
              <span class="stag">REST APIs</span>
              <span class="stag">PostgreSQL</span>
              <span class="stag">Redis</span>
            </div>
            <p style="font-size:0.85rem; color:var(--text2); line-height:1.75;">Typical timeline: <strong style="color:var(--lime)">4-8 weeks</strong>. Deliverables include full source code, deployment pipeline, documentation, and a 30-day post-launch support window.</p>
          </div>
        </div>
      </div>

      <div class="stack-card">
        <div class="sc-num">02</div>
        <div class="sc-icon-wrap">🌐</div>
        <h3>Business Websites</h3>
        <p>High-converting, beautifully designed websites for businesses that want to stand out. Lightweight, fast, and built to rank.</p>
        <div class="stack-tags">
          <span class="stag">Next.js</span>
          <span class="stag">WordPress</span>
          <span class="stag">Webflow</span>
        </div>
      </div>

      <div class="stack-card">
        <div class="sc-num">03</div>
        <div class="sc-icon-wrap">🛒</div>
        <h3>eCommerce Stores</h3>
        <p>Revenue-optimized online stores with secure checkout flows, inventory systems, and conversion-focused UX.</p>
        <div class="stack-tags">
          <span class="stag">Shopify</span>
          <span class="stag">WooCommerce</span>
          <span class="stag">Headless</span>
        </div>
      </div>

      <div class="stack-card">
        <div class="sc-num">04</div>
        <div class="sc-icon-wrap">📱</div>
        <h3>Progressive Web Apps</h3>
        <p>App-like experiences in the browser - offline support, push notifications, installable, and blazing fast.</p>
        <div class="stack-tags">
          <span class="stag">PWA</span>
          <span class="stag">Service Workers</span>
          <span class="stag">React</span>
        </div>
      </div>

      <div class="stack-card">
        <div class="sc-num">05</div>
        <div class="sc-icon-wrap">🔌</div>
        <h3>API & Integrations</h3>
        <p>RESTful and GraphQL APIs, third-party service integrations, payment gateways, CRM hooks, and webhook systems.</p>
        <div class="stack-tags">
          <span class="stag">REST</span>
          <span class="stag">GraphQL</span>
          <span class="stag">Stripe</span>
        </div>
      </div>

      <div class="stack-card">
        <div class="sc-num">06</div>
        <div class="sc-icon-wrap">⚡</div>
        <h3>Performance Rebuilds</h3>
        <p>Existing site too slow or outdated? We audit, rebuild, and optimize - taking Lighthouse scores from 40 to 90+.</p>
        <div class="stack-tags">
          <span class="stag">Core Web Vitals</span>
          <span class="stag">Audit</span>
          <span class="stag">Optimize</span>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="tech-sec" id="tech-stack">
  <div class="container">
    <div class="rv">
      <div class="s-label"><span class="s-num">02 —</span> Technology</div>
      <h2 class="s-title">Our Full<br><span class="ol">Stack.</span></h2>
      <p class="s-sub">We use modern, battle-tested technologies - chosen for performance, developer experience, and long-term maintainability.</p>
    </div>

    <div class="tech-layout rv d1">
      <div class="tech-terminal">
        <div class="terminal-bar">
          <div class="tb-dot" style="background:#FF5F57;"></div>
          <div class="tb-dot" style="background:#FFBD2E;"></div>
          <div class="tb-dot" style="background:#27C93F;"></div>
          <div class="tb-title">anbias.config.json</div>
        </div>
        <div class="terminal-body">
          <div class="t-line"><span class="t-bracket">{</span></div>
          <div class="t-line">&nbsp;&nbsp;<span class="t-key">"project"</span><span class="t-bracket">:</span> <span class="t-str">"your-product"</span><span class="t-bracket">,</span></div>
          <div class="t-line">&nbsp;&nbsp;<span class="t-key">"framework"</span><span class="t-bracket">:</span> <span class="t-val">"Next.js 14"</span><span class="t-bracket">,</span></div>
          <div class="t-line">&nbsp;&nbsp;<span class="t-key">"language"</span><span class="t-bracket">:</span> <span class="t-val">"TypeScript"</span><span class="t-bracket">,</span></div>
          <div class="t-line">&nbsp;&nbsp;<span class="t-key">"styling"</span><span class="t-bracket">:</span> <span class="t-val">"Tailwind CSS"</span><span class="t-bracket">,</span></div>
          <div class="t-line">&nbsp;&nbsp;<span class="t-key">"database"</span><span class="t-bracket">:</span> <span class="t-val">"PostgreSQL + Prisma"</span><span class="t-bracket">,</span></div>
          <div class="t-line">&nbsp;&nbsp;<span class="t-key">"deployment"</span><span class="t-bracket">:</span> <span class="t-val">"Vercel / AWS"</span><span class="t-bracket">,</span></div>
          <div class="t-line">&nbsp;&nbsp;<span class="t-key">"ai_tools"</span><span class="t-bracket">: [</span></div>
          <div class="t-line">&nbsp;&nbsp;&nbsp;&nbsp;<span class="t-str">"Claude"</span><span class="t-bracket">,</span> <span class="t-str">"Copilot"</span><span class="t-bracket">,</span> <span class="t-str">"v0"</span></div>
          <div class="t-line">&nbsp;&nbsp;<span class="t-bracket">],</span></div>
          <div class="t-line">&nbsp;&nbsp;<span class="t-key">"lighthouse_target"</span><span class="t-bracket">:</span> <span class="t-val">90</span><span class="t-bracket">,</span></div>
          <div class="t-line">&nbsp;&nbsp;<span class="t-key">"delivery_days"</span><span class="t-bracket">:</span> <span class="t-val">"7-14"</span><span class="t-bracket">,</span></div>
          <div class="t-line">&nbsp;&nbsp;<span class="t-key">"bugs_shipped"</span><span class="t-bracket">:</span> <span class="t-val">0</span></div>
          <div class="t-line"><span class="t-bracket">}</span></div>
          <div class="t-line" style="margin-top:12px;"><span class="t-comment">// ready to build your project</span></div>
          <div class="t-line"><span class="t-val">$</span> <span class="t-comment">npm run launch</span><span class="t-cursor"></span></div>
        </div>
      </div>

      <div class="tech-categories">
        <div class="tech-category open">
          <div class="tc-header" onclick="toggleTech(this)">
            <div class="tc-left">
              <div class="tc-icon">⚛️</div>
              <div>
                <div class="tc-name">Frontend Frameworks</div>
                <div class="tc-count">6 technologies</div>
              </div>
            </div>
            <div class="tc-toggle">+</div>
          </div>
          <div class="tc-body">
            <div class="tc-pills">
              <span class="tc-pill">React 18</span>
              <span class="tc-pill">Next.js 14</span>
              <span class="tc-pill">TypeScript</span>
              <span class="tc-pill">Tailwind CSS</span>
              <span class="tc-pill">Framer Motion</span>
              <span class="tc-pill">Radix UI</span>
            </div>
          </div>
        </div>
        <div class="tech-category">
          <div class="tc-header" onclick="toggleTech(this)">
            <div class="tc-left">
              <div class="tc-icon">🖥️</div>
              <div>
                <div class="tc-name">Backend & APIs</div>
                <div class="tc-count">7 technologies</div>
              </div>
            </div>
            <div class="tc-toggle">+</div>
          </div>
          <div class="tc-body">
            <div class="tc-pills">
              <span class="tc-pill">Node.js</span>
              <span class="tc-pill">Express</span>
              <span class="tc-pill">Hono</span>
              <span class="tc-pill">REST APIs</span>
              <span class="tc-pill">GraphQL</span>
              <span class="tc-pill">tRPC</span>
              <span class="tc-pill">Zod</span>
            </div>
          </div>
        </div>
        <div class="tech-category">
          <div class="tc-header" onclick="toggleTech(this)">
            <div class="tc-left">
              <div class="tc-icon">🗄️</div>
              <div>
                <div class="tc-name">Databases & ORM</div>
                <div class="tc-count">5 technologies</div>
              </div>
            </div>
            <div class="tc-toggle">+</div>
          </div>
          <div class="tc-body">
            <div class="tc-pills">
              <span class="tc-pill">PostgreSQL</span>
              <span class="tc-pill">MySQL</span>
              <span class="tc-pill">MongoDB</span>
              <span class="tc-pill">Prisma ORM</span>
              <span class="tc-pill">Redis</span>
            </div>
          </div>
        </div>
        <div class="tech-category">
          <div class="tc-header" onclick="toggleTech(this)">
            <div class="tc-left">
              <div class="tc-icon">☁️</div>
              <div>
                <div class="tc-name">Deployment & DevOps</div>
                <div class="tc-count">6 platforms</div>
              </div>
            </div>
            <div class="tc-toggle">+</div>
          </div>
          <div class="tc-body">
            <div class="tc-pills">
              <span class="tc-pill">Vercel</span>
              <span class="tc-pill">AWS</span>
              <span class="tc-pill">Docker</span>
              <span class="tc-pill">GitHub Actions</span>
              <span class="tc-pill">Cloudflare</span>
              <span class="tc-pill">Nginx</span>
            </div>
          </div>
        </div>
        <div class="tech-category">
          <div class="tc-header" onclick="toggleTech(this)">
            <div class="tc-left">
              <div class="tc-icon">📝</div>
              <div>
                <div class="tc-name">CMS & No-Code</div>
                <div class="tc-count">5 platforms</div>
              </div>
            </div>
            <div class="tc-toggle">+</div>
          </div>
          <div class="tc-body">
            <div class="tc-pills">
              <span class="tc-pill">WordPress</span>
              <span class="tc-pill">Sanity CMS</span>
              <span class="tc-pill">Contentful</span>
              <span class="tc-pill">Webflow</span>
              <span class="tc-pill">Payload CMS</span>
            </div>
          </div>
        </div>
        <div class="tech-category">
          <div class="tc-header" onclick="toggleTech(this)">
            <div class="tc-left">
              <div class="tc-icon">🤖</div>
              <div>
                <div class="tc-name">AI Development Tools</div>
                <div class="tc-count">4 tools</div>
              </div>
            </div>
            <div class="tc-toggle">+</div>
          </div>
          <div class="tc-body">
            <div class="tc-pills">
              <span class="tc-pill">Claude API</span>
              <span class="tc-pill">GitHub Copilot</span>
              <span class="tc-pill">v0 by Vercel</span>
              <span class="tc-pill">Cursor IDE</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="process-sec" id="process">
  <div class="container">
    <div class="rv" style="text-align:center">
      <div class="s-label" style="justify-content:center"><span class="s-num">03 —</span> How We Build</div>
      <h2 class="s-title" style="text-align:center">From Idea<br><span class="ol">To Live - Fast.</span></h2>
      <p class="s-sub" style="text-align:center;margin:0 auto 0">Our AI-augmented workflow cuts 60% of revision cycles and ships cleaner code on every sprint.</p>
    </div>
    <div class="process-steps rv d1">
      <div class="ps-card">
        <div class="ps-num">01</div>
        <div class="ps-icon">🎯</div>
        <h4>Discovery & Scope</h4>
        <p>Free consultation covers your goals, audience, competitors, and technical requirements. We define the scope, stack, and exact timeline.</p>
        <div class="ps-timeline">Day 1-2</div>
        <div class="ps-arrow">→</div>
      </div>
      <div class="ps-card">
        <div class="ps-num">02</div>
        <div class="ps-icon">🎨</div>
        <h4>UI/UX Design</h4>
        <p>AI-assisted design generates unique wireframes and visual systems reviewed by senior designers. You approve before a single line of code is written.</p>
        <div class="ps-timeline">Day 2-5</div>
        <div class="ps-arrow">→</div>
      </div>
      <div class="ps-card">
        <div class="ps-num">03</div>
        <div class="ps-icon">⚙️</div>
        <h4>Build & AI QA</h4>
        <p>Development with AI code assistance, followed by automated testing for accessibility, performance, and security - 96% bug-free deployments.</p>
        <div class="ps-timeline">Day 5-12</div>
        <div class="ps-arrow">→</div>
      </div>
      <div class="ps-card">
        <div class="ps-num">04</div>
        <div class="ps-icon">🚀</div>
        <h4>Launch & Handoff</h4>
        <p>Deployment to your chosen host, DNS config, post-launch monitoring, and a full walkthrough of your CMS and codebase before we hand the keys over.</p>
        <div class="ps-timeline">Day 12-14</div>
      </div>
    </div>
  </div>
</section>

<section class="deliverables-sec" id="deliverables">
  <div class="container">
    <div class="deliverables-layout">
      <div class="rv">
        <div class="s-label"><span class="s-num">04 —</span> What You Get</div>
        <h2 class="s-title">Everything.<br><span class="ol">No Extras.</span></h2>
        <p class="s-sub">Every project includes the full suite - no hidden charges for documentation, testing, or deployment.</p>
        <div class="dlv-list">
          <div class="dlv-item">
            <div class="dlv-icon">📦</div>
            <div class="dlv-text">
              <h4>Full Source Code Ownership</h4>
              <p>100% of the codebase is yours - no lock-in, no ongoing licensing. Clean, commented, and documented.</p>
            </div>
          </div>
          <div class="dlv-item">
            <div class="dlv-icon">📊</div>
            <div class="dlv-text">
              <h4>Lighthouse Score ≥ 90</h4>
              <p>Performance, accessibility, SEO, and best practices all tested and tuned before delivery.</p>
            </div>
          </div>
          <div class="dlv-item">
            <div class="dlv-icon">📱</div>
            <div class="dlv-text">
              <h4>Mobile-First Responsive Design</h4>
              <p>Tested across 15+ device sizes. WCAG 2.1 AA compliant accessibility built in from the start.</p>
            </div>
          </div>
          <div class="dlv-item">
            <div class="dlv-icon">🔒</div>
            <div class="dlv-text">
              <h4>Basic Security Hardening</h4>
              <p>CSP headers, HTTPS enforcement, input sanitization, and dependency vulnerability scanning included by default.</p>
            </div>
          </div>
          <div class="dlv-item">
            <div class="dlv-icon">🚀</div>
            <div class="dlv-text">
              <h4>CI/CD Pipeline Setup</h4>
              <p>GitHub Actions (or your preferred tool) configured for automatic deploys. Push to main = live in 90 seconds.</p>
            </div>
          </div>
          <div class="dlv-item">
            <div class="dlv-icon">📖</div>
            <div class="dlv-text">
              <h4>30-Day Post-Launch Support</h4>
              <p>Bug fixes, minor updates, and technical guidance for 30 days after you go live - no extra charge.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="rv d2">
        <div class="quality-cards">
          <div class="qc">
            <div class="qc-val">90+</div>
            <div class="qc-label">Lighthouse Score</div>
            <div class="qc-sub">Performance, SEO & Accessibility across all projects</div>
          </div>
          <div class="qc">
            <div class="qc-val">96%</div>
            <div class="qc-label">Bug-Free Rate</div>
            <div class="qc-sub">AI-powered QA catches issues before they reach production</div>
          </div>
          <div class="qc">
            <div class="qc-val">4×</div>
            <div class="qc-label">Faster Delivery</div>
            <div class="qc-sub">Compared to traditional agencies - same quality, 1/4 the wait</div>
          </div>
          <div class="qc">
            <div class="qc-val">0</div>
            <div class="qc-label">Lock-In Contracts</div>
            <div class="qc-sub">Own your code on day one. No SaaS dependency, ever</div>
          </div>
          <div class="qc wide">
            <div class="qc-val">150+</div>
            <div class="qc-body">
              <div class="qc-label">Projects Shipped</div>
              <div class="qc-sub">For startups, enterprises, and growing businesses across the US and India since 2021</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="compare-sec" id="compare">
  <div class="container">
    <div class="rv" style="text-align:center">
      <div class="s-label" style="justify-content:center"><span class="s-num">05 —</span> Why Anbias</div>
      <h2 class="s-title" style="text-align:center">How We<br><span class="ol">Stack Up.</span></h2>
      <p class="s-sub" style="text-align:center;margin:0 auto 64px">Not all agencies are equal. See what separates AI-powered development from the status quo.</p>
    </div>
    <div class="compare-table rv d1">
      <div class="ct-header">
        <div class="ct-col-head">Feature</div>
        <div class="ct-col-head anbias">Anbias</div>
        <div class="ct-col-head">Traditional Agency</div>
        <div class="ct-col-head">Freelancer</div>
      </div>
      <div class="ct-row">
        <div class="ct-cell feature-name">Delivery Timeline</div>
        <div class="ct-cell anbias-col"><span class="ct-yes">✓</span> 7-14 days</div>
        <div class="ct-cell">6-12 weeks</div>
        <div class="ct-cell">Unpredictable</div>
      </div>
      <div class="ct-row">
        <div class="ct-cell feature-name">AI-Assisted Development</div>
        <div class="ct-cell anbias-col"><span class="ct-yes">✓</span> Full pipeline</div>
        <div class="ct-cell"><span class="ct-no">✗</span> Rarely</div>
        <div class="ct-cell"><span class="ct-partial">varies</span></div>
      </div>
      <div class="ct-row">
        <div class="ct-cell feature-name">Lighthouse Score Guarantee</div>
        <div class="ct-cell anbias-col"><span class="ct-yes">✓</span> 90+ guaranteed</div>
        <div class="ct-cell"><span class="ct-partial">sometimes</span></div>
        <div class="ct-cell"><span class="ct-partial">varies</span></div>
      </div>
      <div class="ct-row">
        <div class="ct-cell feature-name">Source Code Ownership</div>
        <div class="ct-cell anbias-col"><span class="ct-yes">✓</span> Day one</div>
        <div class="ct-cell"><span class="ct-yes">✓</span></div>
        <div class="ct-cell"><span class="ct-yes">✓</span></div>
      </div>
      <div class="ct-row">
        <div class="ct-cell feature-name">Security Hardening Included</div>
        <div class="ct-cell anbias-col"><span class="ct-yes">✓</span> Always</div>
        <div class="ct-cell"><span class="ct-partial">extra cost</span></div>
        <div class="ct-cell"><span class="ct-no">✗</span></div>
      </div>
      <div class="ct-row">
        <div class="ct-cell feature-name">CI/CD Pipeline Setup</div>
        <div class="ct-cell anbias-col"><span class="ct-yes">✓</span> Always</div>
        <div class="ct-cell"><span class="ct-partial">extra cost</span></div>
        <div class="ct-cell"><span class="ct-no">✗</span></div>
      </div>
      <div class="ct-row">
        <div class="ct-cell feature-name">Post-Launch Support</div>
        <div class="ct-cell anbias-col"><span class="ct-yes">✓</span> 30 days free</div>
        <div class="ct-cell"><span class="ct-partial">paid retainer</span></div>
        <div class="ct-cell"><span class="ct-no">✗</span></div>
      </div>
      <div class="ct-row">
        <div class="ct-cell feature-name">Free Consultancy</div>
        <div class="ct-cell anbias-col"><span class="ct-yes">✓</span> Always free</div>
        <div class="ct-cell"><span class="ct-no">✗</span></div>
        <div class="ct-cell"><span class="ct-no">✗</span></div>
      </div>
    </div>
  </div>
</section>

<section class="results-sec" id="results">
  <div class="container">
    <div class="rv" style="text-align:center">
      <div class="s-label" style="justify-content:center"><span class="s-num">06 —</span> Client Results</div>
      <h2 class="s-title" style="text-align:center">Numbers That<br><span class="ol">Speak.</span></h2>
    </div>
    <div class="results-grid rv d1">
      <div class="result-card">
        <div class="rc-industry">SaaS Platform</div>
        <div class="rc-metric">4<span>×</span></div>
        <div class="rc-label">Faster page load after we rebuilt their legacy PHP app in Next.js - dropped from 8.2s to 1.9s LCP.</div>
        <div class="rc-project">// Project: B2B analytics dashboard</div>
      </div>
      <div class="result-card">
        <div class="rc-industry">eCommerce</div>
        <div class="rc-metric">+<span>38</span>%</div>
        <div class="rc-label">Conversion rate improvement for a Shopify store after UX redesign, checkout optimization, and CWV tuning.</div>
        <div class="rc-project">// Project: US fashion brand storefront</div>
      </div>
      <div class="result-card">
        <div class="rc-industry">FinTech Startup</div>
        <div class="rc-metric">11<span>d</span></div>
        <div class="rc-label">Days from kickoff to live MVP - a full-featured loan comparison portal with auth, dashboards, and API integrations.</div>
        <div class="rc-project">// Project: Loan marketplace India</div>
      </div>
    </div>
  </div>
</section>

<div class="consult-sec" id="consult">
  <div class="consult-grid">
    <div class="rv">
      <div class="s-label"><span class="s-num">07 —</span> Start Here</div>
      <h2 class="s-title">Book Your<br><span class="ol">Free Dev</span><br>Consult.</h2>
      <p class="s-sub">Tell us about your project. We'll review it, estimate a timeline and cost, and map out exactly how we'd approach it - no charge, no obligation.</p>
      <div class="perks-list">
        <div class="perk-row">
          <div class="perk-num">01</div>
          <div class="perk-body">
            <h4>Project Scoping</h4>
            <p>We break down your requirements into an accurate timeline and a realistic feature list - so you know what to expect.</p>
          </div>
        </div>
        <div class="perk-row">
          <div class="perk-num">02</div>
          <div class="perk-body">
            <h4>Stack Recommendation</h4>
            <p>We'll recommend the best technical approach for your use case - whether it's WordPress, Next.js, or a custom SaaS build.</p>
          </div>
        </div>
        <div class="perk-row">
          <div class="perk-num">03</div>
          <div class="perk-body">
            <h4>Honest Cost Estimate</h4>
            <p>Transparent pricing broken down by feature. No hidden clauses, no inflated retainers. Just a fair quote.</p>
          </div>
        </div>
        <div class="perk-row">
          <div class="perk-num">04</div>
          <div class="perk-body">
            <h4>Audit of Existing Site</h4>
            <p>Already have a site? We'll review its performance, code quality, and security surface for free before the call.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="consult-form-wrap rv d2">
      <div class="cf-title">Let's Build<br>Something</div>
      <p class="cf-sub">Takes 2 minutes. We respond within 24 hours.</p>
      <form method="POST" action="{{ route('services.enquiry.store') }}" onsubmit="submitForm2(event)">
        @csrf
        <input type="hidden" name="service_slug" value="{{ $slug }}">
        <input type="hidden" name="form_started_at" class="form-started-at" value="">
        <div style="position:absolute;left:-9999px;opacity:0;pointer-events:none" aria-hidden="true">
          <input type="text" name="_hp_field" tabindex="-1" autocomplete="off"/>
        </div>
        <div class="form-row2">
          <div class="fg"><label>First Name</label><input type="text" name="first_name" placeholder="Rahul" required/></div>
          <div class="fg"><label>Last Name</label><input type="text" name="last_name" placeholder="Sharma"/></div>
        </div>
        <div class="fg"><label>Business Email</label><input type="email" name="email" placeholder="you@company.com" required/></div>
        <div class="fg"><label>Phone / WhatsApp</label><input type="tel" name="phone_number" placeholder="+1 or +91..." required/></div>
        <div class="fg"><label>Existing Website (if any)</label><input type="url" name="website_url" placeholder="https://yoursite.com"/></div>
        <div class="fg">
          <label>Project Type</label>
          <select name="project_type" required>
            <option value="">Select one...</option>
            <option>New business website</option>
            <option>Custom web application / SaaS</option>
            <option>eCommerce store</option>
            <option>Rebuild / redesign existing site</option>
            <option>API development / integrations</option>
            <option>Performance optimization</option>
            <option>Not sure yet - need guidance</option>
          </select>
        </div>
        <div class="fg"><label>Project Brief</label><textarea name="message" placeholder="Describe your project, goals, and timeline..." required></textarea></div>
        <button type="submit" class="form-submit2">{{ $service['consult_label'] }} →</button>
        <p class="form-note2">🔒 Private. No spam. No commitment.</p>
        <p class="form-success-msg" id="serviceFormSuccess">✓ Thank you for contacting us. We will get back to you soon.</p>
        <p class="form-error-msg" id="serviceFormError"></p>
      </form>
    </div>
  </div>
</div>

<section class="pricing-sec" id="pricing">
  <div class="container">
    <div class="rv" style="text-align:center">
      <div class="s-label" style="justify-content:center"><span class="s-num">08 —</span> Pricing</div>
      <h2 class="s-title" style="text-align:center">Transparent<br><span class="ol">Pricing.</span></h2>
      <p class="s-sub" style="text-align:center;margin:0 auto 0">Fixed-scope packages for most projects. Complex builds? We quote after the free consultation.</p>
    </div>
    <div class="pricing-grid2 rv d1">
      <div class="pc">
        <div class="pc-tier">Starter</div>
        <div class="pc-price"><sup>₹</sup>39,999</div>
        <div class="pc-freq">one-time · 7-10 day delivery</div>
        <ul class="pc-list">
          <li><span class="ck">✓</span> Up to 5 pages</li>
          <li><span class="ck">✓</span> Mobile-first responsive</li>
          <li><span class="ck">✓</span> CMS integration (WordPress / Sanity)</li>
          <li><span class="ck">✓</span> Contact form + basic SEO</li>
          <li><span class="ck">✓</span> Lighthouse score ≥ 90</li>
          <li><span class="ck">✓</span> 14-day post-launch support</li>
        </ul>
        <a href="#consult" class="pc-cta">Get Started</a>
      </div>
      <div class="pc featured">
        <div class="pc-badge">Most Popular</div>
        <div class="pc-tier">Growth</div>
        <div class="pc-price"><sup>₹</sup>99,999</div>
        <div class="pc-freq">one-time · 10-18 day delivery</div>
        <ul class="pc-list">
          <li><span class="ck">✓</span> Up to 15 pages / sections</li>
          <li><span class="ck">✓</span> Custom design system</li>
          <li><span class="ck">✓</span> API integrations (CRM, payments)</li>
          <li><span class="ck">✓</span> Auth system (login / dashboard)</li>
          <li><span class="ck">✓</span> Full CI/CD pipeline + deployment</li>
          <li><span class="ck">✓</span> Security hardening included</li>
          <li><span class="ck">✓</span> 30-day post-launch support</li>
        </ul>
        <a href="#consult" class="pc-cta">Get Started</a>
      </div>
      <div class="pc">
        <div class="pc-tier">Enterprise / Custom</div>
        <div class="pc-price">Custom</div>
        <div class="pc-freq">tailored to your requirements</div>
        <ul class="pc-list">
          <li><span class="ck">✓</span> Full SaaS / web app builds</li>
          <li><span class="ck">✓</span> Dedicated project manager</li>
          <li><span class="ck">✓</span> Complex API & data architecture</li>
          <li><span class="ck">✓</span> Full VAPT security audit</li>
          <li><span class="ck">✓</span> Ongoing retainer available</li>
          <li><span class="ck">✓</span> Priority 24/7 support</li>
        </ul>
        <a href="#consult" class="pc-cta">Talk to Us</a>
      </div>
    </div>
  </div>
</section>

<section class="faq-sec" id="faq">
  <div class="container">
    <div class="rv" style="text-align:center">
      <div class="s-label" style="justify-content:center"><span class="s-num">09 —</span> FAQ</div>
      <h2 class="s-title" style="text-align:center">Questions About<br><span class="ol">Dev Projects.</span></h2>
    </div>
    <div class="faq2 rv">
      <div class="faq2-item">
        <button class="faq2-q" onclick="toggleFaq2(this)">How fast can you actually deliver a website?<span class="faq2-icon">+</span></button>
        <div class="faq2-a"><p>A standard 5-8 page business website typically ships in 7-14 days. This is possible because our AI-assisted workflow generates high-quality design drafts and code in hours, not days - leaving our senior developers to focus on quality assurance and custom logic rather than boilerplate. Complex SaaS apps typically take 4-8 weeks.</p></div>
      </div>
      <div class="faq2-item">
        <button class="faq2-q" onclick="toggleFaq2(this)">Will my website use AI-generated content or be generic?<span class="faq2-icon">+</span></button>
        <div class="faq2-a"><p>No - AI tools are used to accelerate the coding and design process, not to generate your content or make it look generic. Every design is reviewed and refined by our creative team. The result is a unique, custom-built product, just delivered in a fraction of the usual time.</p></div>
      </div>
      <div class="faq2-item">
        <button class="faq2-q" onclick="toggleFaq2(this)">Do I own my code after the project ends?<span class="faq2-icon">+</span></button>
        <div class="faq2-a"><p>Absolutely. 100% of the codebase, assets, and documentation is transferred to you at project completion. There's no licensing fee, no SaaS dependency, and no ongoing cost tied to us. You can host it anywhere and modify it freely.</p></div>
      </div>
      <div class="faq2-item">
        <button class="faq2-q" onclick="toggleFaq2(this)">What tech stack will you use for my project?<span class="faq2-icon">+</span></button>
        <div class="faq2-a"><p>We recommend the best stack for your specific requirements. Most modern web apps use Next.js + TypeScript + Tailwind on the frontend and Node.js + PostgreSQL on the backend. CMS-heavy sites often use WordPress or Sanity. We'll walk through the tradeoffs during the free consultation before committing.</p></div>
      </div>
      <div class="faq2-item">
        <button class="faq2-q" onclick="toggleFaq2(this)">What happens if there's a bug after launch?<span class="faq2-icon">+</span></button>
        <div class="faq2-a"><p>All plans include a 30-day (Growth/Enterprise) or 14-day (Starter) post-launch support window where we fix any bugs at no extra cost. After that window, we offer affordable monthly maintenance retainers or you can handle it in-house - your choice.</p></div>
      </div>
      <div class="faq2-item">
        <button class="faq2-q" onclick="toggleFaq2(this)">Can you work with my existing team or codebase?<span class="faq2-icon">+</span></button>
        <div class="faq2-a"><p>Yes - we regularly augment in-house teams, take over legacy codebases for modernisation, and collaborate via GitHub PRs and Slack. We're flexible on integration into your existing workflow.</p></div>
      </div>
    </div>
  </div>
</section>

<div class="other-services-sec">
  <div class="container" style="max-width:1400px;margin:0 auto;">
    <div class="rv">
      <div class="s-label"><span class="s-num">10 —</span> Also From Anbias</div>
      <h2 class="s-title">Explore Our<br><span class="ol">Other Services.</span></h2>
    </div>
    <div class="os-grid rv d1">
      @php $shown = 0; @endphp
      @foreach($services as $serviceSlug => $serviceItem)
        @if($serviceSlug !== $slug && isset($serviceMeta[$serviceSlug]) && $shown < 4)
          @php $shown++; @endphp
          <a href="{{ route('services.show', ['slug' => $serviceSlug]) }}" class="os-card">
            <div class="os-card-icon">{{ $serviceMeta[$serviceSlug]['icon'] }}</div>
            <div class="os-card-label">{{ $serviceMeta[$serviceSlug]['label'] }}</div>
            <div class="os-card-title">{{ $serviceMeta[$serviceSlug]['title'] }}</div>
            <div class="os-card-desc">{{ $serviceMeta[$serviceSlug]['desc'] }}</div>
            <div class="os-card-arrow">Explore Service →</div>
          </a>
        @endif
      @endforeach
    </div>
  </div>
</div>

<div class="fcta">
  <div class="fcta-eyebrow">// Ready to build? Let's talk.</div>
  <h2 class="fcta-title">
    Launch<br>
    <span class="ol">Something</span><br>
    Remarkable.
  </h2>
  <p class="fcta-sub">Join 150+ businesses across the US and India who chose Anbias to build their digital products. Start with a free consultation.</p>
  <div class="fcta-btns">
    <a href="#consult" class="btn-lime">{{ $service['consult_label'] }}</a>
    <a href="mailto:contact@anbias.com" class="btn-ghost">contact@anbias.com</a>
  </div>
</div>

@push('scripts')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "How fast can you actually deliver a website?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A standard 5-8 page business website typically ships in 7-14 days. This is possible because our AI-assisted workflow generates high-quality design drafts and code in hours, not days — leaving our senior developers to focus on quality assurance and custom logic rather than boilerplate. Complex SaaS apps typically take 4-8 weeks."
      }
    },
    {
      "@type": "Question",
      "name": "Will my website use AI-generated content or be generic?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No — AI tools are used to accelerate the coding and design process, not to generate your content or make it look generic. Every design is reviewed and refined by our creative team. The result is a unique, custom-built product, just delivered in a fraction of the usual time."
      }
    },
    {
      "@type": "Question",
      "name": "Do I own my code after the project ends?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Absolutely. 100% of the codebase, assets, and documentation is transferred to you at project completion. There's no licensing fee, no SaaS dependency, and no ongoing cost tied to us. You can host it anywhere and modify it freely."
      }
    },
    {
      "@type": "Question",
      "name": "What tech stack will you use for my project?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We recommend the best stack for your specific requirements. Most modern web apps use Next.js + TypeScript + Tailwind on the frontend and Node.js + PostgreSQL on the backend. CMS-heavy sites often use WordPress or Sanity. We'll walk through the tradeoffs during the free consultation before committing."
      }
    },
    {
      "@type": "Question",
      "name": "What happens if there's a bug after launch?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "All plans include a 30-day (Growth/Enterprise) or 14-day (Starter) post-launch support window where we fix any bugs at no extra cost. After that window, we offer affordable monthly maintenance retainers or you can handle it in-house — your choice."
      }
    },
    {
      "@type": "Question",
      "name": "Can you work with my existing team or codebase?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes — we regularly augment in-house teams, take over legacy codebases for modernisation, and collaborate via GitHub PRs and Slack. We're flexible on integration into your existing workflow."
      }
    }
  ]
}
</script>
@endpush

@endsection
