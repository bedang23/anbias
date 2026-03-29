@extends('layouts.app')

@section('title', 'Contact Anbias | Technical Strategy Session')
@section('meta_description', 'Request a free technical strategy session with an Anbias Senior Architect.')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endpush

@section('content')
    <!-- ═══════════════════ HERO ═══════════════════ -->
<section class="hero" data-component="hero">
  <div class="hero-grid"></div>
  <div class="hero-scan"></div>
  <div class="hero-ghost">CONTACT</div>

  <div class="hero-inner">
    <div class="breadcrumb">
      <a href="{{ route('home') }}">Home</a>
      <span class="sep">/</span>
      <span>Contact</span>
    </div>
    <div class="hero-label">
      <span class="dash"></span>
      Senior Architect Access
      <span class="blink">_</span>
    </div>
    <h1 class="hero-title">
      Start Your<br>
      <span class="accent">Technical</span><br>
      <span class="ol">Roadmap.</span>
    </h1>
    <p class="hero-sub">
      Skip the sales pitch. Speak directly with a <strong>Senior Architect</strong>
      about your development or security needs — and walk away with a concrete
      action plan, free.
    </p>
  </div>
</section>

<!-- ═══════════════════ MAIN ═══════════════════ -->
<div class="main-wrap">

  <!-- ─── LEFT: FORM ─── -->
  <div class="form-section rv" data-component="contact-form">

    <div class="form-header">
      <div class="form-eyebrow">01 — Strategy Session</div>
      <h2 class="form-title">
        Request a Free<br>
        <span class="ol">Technical Strategy</span><br>
        Session
      </h2>
      <p class="form-subtitle">
        Tell us about your project in 60 seconds. We'll match you with the right architect
        and respond within <strong style="color:var(--lime)">24 hours</strong>.
      </p>
      <div class="trust-bar">
        <div class="trust-item"><span class="ti-dot"></span>No commitment required</div>
        <div class="trust-item"><span class="ti-dot"></span>100% confidential</div>
        <div class="trust-item"><span class="ti-dot"></span>Senior-level response</div>
      </div>
    </div>

    <div class="form-card">

      <!-- Progress Bar -->
      <div class="form-progress" id="formProgress">
        <div class="fp-step active" id="fpStep1">
          <div class="fp-dot">1</div>
          <div class="fp-label">You</div>
        </div>
        <div class="fp-line" id="fpLine1"></div>
        <div class="fp-step" id="fpStep2">
          <div class="fp-dot">2</div>
          <div class="fp-label">Project</div>
        </div>
        <div class="fp-line" id="fpLine2"></div>
        <div class="fp-step" id="fpStep3">
          <div class="fp-dot">3</div>
          <div class="fp-label">Details</div>
        </div>
      </div>

      <form
        id="contactForm"
        method="POST"
        action="{{ route('contact.store') }}"
        data-component="strategy-form"
        data-action="{{ route('contact.store') }}"
        novalidate
      >
        @csrf

        <!-- ── STEP 1: Who are you ── -->
        <div class="form-step active" id="step1" data-step="1">

          <div class="field-row">
            <div class="field-group" id="fg-fullName">
              <label for="fullName">
                Full Name <span class="req">*</span>
              </label>
              <input
                type="text"
                id="fullName"
                name="full_name"
                placeholder="Rahul Sharma"
                autocomplete="name"
                data-validate="required|minlen:2"
              />
              <span class="field-icon">✓</span>
              <span class="field-error" id="err-fullName">Please enter your full name.</span>
            </div>
            <div class="field-group" id="fg-email">
              <label for="email">
                Business Email <span class="req">*</span>
              </label>
              <input
                type="email"
                id="email"
                name="email"
                placeholder="you@company.com"
                autocomplete="email"
                data-validate="required|email"
              />
              <span class="field-icon">✓</span>
              <span class="field-error" id="err-email">Enter a valid business email.</span>
            </div>
          </div>

          <div class="field-group" id="fg-website">
            <label for="website">
              Website URL <span class="opt">(optional)</span>
            </label>
            <input
              type="url"
              id="website"
              name="website_url"
              placeholder="https://yourcompany.com"
              autocomplete="url"
              data-validate="url"
            />
            <span class="field-icon">✓</span>
            <span class="field-error" id="err-website">Please enter a valid URL (include https://).</span>
          </div>

          <div class="field-group" id="fg-company">
            <label for="company">
              Company / Project Name <span class="opt">(optional)</span>
            </label>
            <input
              type="text"
              id="company"
              name="company_name"
              placeholder="Acme Corp"
            />
          </div>

          <div class="step-nav">
            <div></div>
            <button type="button" class="btn-next" onclick="goToStep(2)">
              Next: Your Project
              <span class="arrow">→</span>
            </button>
          </div>
        </div>

        <!-- ── STEP 2: Your project ── -->
        <div class="form-step" id="step2" data-step="2">

          <!-- Current Tech Stack (pill selector) -->
          <div class="field-group" id="fg-stack">
            <label>Current Tech Stack <span class="opt">(select all that apply)</span></label>
            <div class="stack-pills" id="stackPills">
              <button type="button" class="stack-pill" data-val="React">React</button>
              <button type="button" class="stack-pill" data-val="Next.js">Next.js</button>
              <button type="button" class="stack-pill" data-val="Vue">Vue</button>
              <button type="button" class="stack-pill" data-val="Laravel">Laravel</button>
              <button type="button" class="stack-pill" data-val="Node.js">Node.js</button>
              <button type="button" class="stack-pill" data-val="WordPress">WordPress</button>
              <button type="button" class="stack-pill" data-val="Shopify">Shopify</button>
              <button type="button" class="stack-pill" data-val="Python">Python</button>
              <button type="button" class="stack-pill" data-val="AWS">AWS</button>
              <button type="button" class="stack-pill" data-val="None yet">None yet</button>
            </div>
            <input type="hidden" id="stackValue" name="tech_stack"/>
          </div>

          <!-- Primary Goal -->
          <div class="field-group" id="fg-goal">
            <label>Primary Goal <span class="req">*</span></label>
            <div class="goal-cards" id="goalCards">
              <div class="goal-card" data-val="Growth" onclick="selectGoal(this)">
                <span class="goal-icon">📈</span>
                <span class="goal-label">Growth</span>
              </div>
              <div class="goal-card" data-val="Security" onclick="selectGoal(this)">
                <span class="goal-icon">🛡️</span>
                <span class="goal-label">Security</span>
              </div>
              <div class="goal-card" data-val="Migration" onclick="selectGoal(this)">
                <span class="goal-icon">🔄</span>
                <span class="goal-label">Migration</span>
              </div>
              <div class="goal-card" data-val="New Build" onclick="selectGoal(this)">
                <span class="goal-icon">🏗️</span>
                <span class="goal-label">New Build</span>
              </div>
              <div class="goal-card" data-val="SEO / Perf" onclick="selectGoal(this)">
                <span class="goal-icon">⚡</span>
                <span class="goal-label">SEO / Perf</span>
              </div>
              <div class="goal-card" data-val="VAPT Audit" onclick="selectGoal(this)">
                <span class="goal-icon">🔍</span>
                <span class="goal-label">VAPT Audit</span>
              </div>
            </div>
            <input type="hidden" id="goalValue" name="primary_goal"/>
            <span class="field-error" id="err-goal">Please select a primary goal.</span>
          </div>

          <div class="step-nav">
            <button type="button" class="btn-back" onclick="goToStep(1)">← Back</button>
            <button type="button" class="btn-next" onclick="goToStep(3)">
              Next: Final Details
              <span class="arrow">→</span>
            </button>
          </div>
        </div>

        <!-- ── STEP 3: Details & submit ── -->
        <div class="form-step" id="step3" data-step="3">

          <!-- Budget -->
          <div class="field-group">
            <label>Estimated Budget <span class="opt">(optional)</span></label>
            <div class="budget-options" id="budgetOpts">
              <div class="budget-opt" data-val="Under $1k" onclick="selectBudget(this)">
                <div class="bo-label">Under $1,000</div>
                <div class="bo-sub">Starter / landing page</div>
              </div>
              <div class="budget-opt" data-val="$1k–$5k" onclick="selectBudget(this)">
                <div class="bo-label">$1,000 – $5,000</div>
                <div class="bo-sub">Growth-stage project</div>
              </div>
              <div class="budget-opt" data-val="$5k–$20k" onclick="selectBudget(this)">
                <div class="bo-label">$5,000 – $20,000</div>
                <div class="bo-sub">Complex web app</div>
              </div>
              <div class="budget-opt" data-val="$20k+" onclick="selectBudget(this)">
                <div class="bo-label">$20,000+</div>
                <div class="bo-sub">Enterprise / retainer</div>
              </div>
            </div>
            <input type="hidden" id="budgetValue" name="budget_range"/>
          </div>

          <!-- Timeline -->
          <div class="field-group">
            <label>Preferred Start <span class="opt">(optional)</span></label>
            <div class="timeline-opts" id="timelineOpts">
              <div class="timeline-opt" data-val="ASAP" onclick="selectTimeline(this)">ASAP</div>
              <div class="timeline-opt" data-val="1–2 weeks" onclick="selectTimeline(this)">1–2 Weeks</div>
              <div class="timeline-opt" data-val="1 month" onclick="selectTimeline(this)">1 Month</div>
              <div class="timeline-opt" data-val="3 months" onclick="selectTimeline(this)">3 Months</div>
              <div class="timeline-opt" data-val="Just exploring" onclick="selectTimeline(this)">Just Exploring</div>
            </div>
            <input type="hidden" id="timelineValue" name="timeline"/>
          </div>

          <!-- Message -->
          <div class="field-group" id="fg-message">
            <label for="message">
              Describe Your Challenge <span class="req">*</span>
            </label>
            <textarea
              id="message"
              name="message"
              placeholder="Tell us what you're building, what's broken, or what you need secured. The more context, the better session we can prepare..."
              data-validate="required|minlen:20"
            ></textarea>
            <span class="field-icon">✓</span>
            <span class="field-error" id="err-message">Please describe your challenge (min. 20 characters).</span>
          </div>

          <!-- Preferred contact -->
          <div class="field-group">
            <label for="preferredContact">Preferred Contact Method</label>
            <select id="preferredContact" name="preferred_contact">
              <option value="">Select preference...</option>
              <option value="email">Email</option>
              <option value="whatsapp">WhatsApp</option>
              <option value="call">Phone Call</option>
              <option value="video">Video Call (Meet/Zoom)</option>
            </select>
          </div>

          <!-- Honeypot field for spam (hidden) -->
          <div style="position:absolute;left:-9999px;opacity:0;pointer-events:none" aria-hidden="true">
            <input type="text" name="_hp_field" tabindex="-1" autocomplete="off"/>
          </div>

          <div class="step-nav" style="flex-direction:column;gap:0;">
            <div style="display:flex;justify-content:space-between;align-items:center;width:100%;margin-bottom:0">
              <button type="button" class="btn-back" onclick="goToStep(2)">← Back</button>
            </div>
            <button type="submit" class="btn-submit" id="submitBtn">
              <span id="submitLabel">Claim My Strategy Session</span>
              <span class="arrow" id="submitArrow">↗</span>
            </button>
          </div>
          <p class="form-disclaimer">🔒 Your data is never shared or sold. By submitting you agree to our Privacy Policy. Response guaranteed within 24 hours.</p>
        </div>

        <!-- ── SUCCESS STATE ── -->
        <div class="form-success" id="formSuccess">
          <div class="success-icon">✅</div>
          <div class="success-title">Session Claimed!</div>
          <p class="success-sub">
            You're on the list. A Senior Architect will reach out to
            <strong id="successEmail" style="color:var(--lime)"></strong> within
            <strong style="color:var(--lime)">24 hours</strong> to confirm your session.
          </p>
          <div style="margin-top:28px;display:flex;gap:12px;justify-content:center;flex-wrap:wrap">
            <a href="{{ route('home') }}#services" style="font-family:var(--mono);font-size:0.7rem;letter-spacing:0.1em;text-transform:uppercase;color:var(--lime);text-decoration:none;border-bottom:1px solid rgba(200,241,53,0.3);padding-bottom:2px">
              Explore Our Services →
            </a>
            <a href="{{ route('home') }}" style="font-family:var(--mono);font-size:0.7rem;letter-spacing:0.1em;text-transform:uppercase;color:var(--text3);text-decoration:none;border-bottom:1px solid var(--border2);padding-bottom:2px">
              Back to Home
            </a>
          </div>
        </div>

      </form>
    </div>
  </div>

  <!-- ─── RIGHT: SIDEBAR ─── -->
  <aside class="sidebar rv d2" data-component="contact-sidebar">

    <!-- Response time -->
    <div class="response-badge">
      <div class="rb-pulse"></div>
      <div class="rb-text">
        <h4>Currently accepting sessions</h4>
        <p>Avg. response time: &lt; 4 hours</p>
      </div>
    </div>

    <!-- Direct channels -->
    <div class="channels-card" data-component="direct-channels">
      <div class="channels-header">Direct Channels</div>

      <a href="mailto:contact@anbias.com" class="channel-item">
        <div class="channel-icon-wrap">✉️</div>
        <div class="channel-body">
          <div class="channel-type">Email</div>
          <div class="channel-label">contact@anbias.com</div>
          <div class="channel-note">Best for detailed briefs & proposals</div>
        </div>
      </a>

      <a href="tel:+918109109960" class="channel-item">
        <div class="channel-icon-wrap">📞</div>
        <div class="channel-body">
          <div class="channel-type">Direct Line</div>
          <div class="channel-label">+91 8109109960</div>
          <div class="channel-note">Mon–Sat, 10am–7pm IST</div>
        </div>
      </a>

      <a href="https://wa.me/918223830302" target="_blank" rel="noopener" class="channel-item">
        <div class="channel-icon-wrap">💬</div>
        <div class="channel-body">
          <div class="channel-type">WhatsApp</div>
          <div class="channel-label">+91 8223830302</div>
          <div class="channel-note">Fastest response · Usually instant</div>
        </div>
      </a>
    </div>

    <!-- Location context -->
    <div class="location-card" data-component="location">
      <div class="location-header">
        <div class="location-title">Where We Are</div>
        <div class="location-flags">
          <div class="location-row">
            <span class="flag">🇮🇳</span>
            <span class="loc-label">Pune, Maharashtra</span>
            <span class="loc-role">HQ</span>
          </div>
          <div class="location-row">
            <span class="flag">🇦🇪</span>
            <span class="loc-label">Dubai, UAE</span>
            <span class="loc-role">Serving</span>
          </div>
          <div class="location-row">
            <span class="flag">🇺🇸</span>
            <span class="loc-label">United States</span>
            <span class="loc-role">Serving</span>
          </div>
        </div>
      </div>
      <!-- Google Maps Embed — replace src with your actual embed URL -->
      <div class="map-wrap">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d242011.70502563682!2d73.72629565!3d18.524564799999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bf2e67461101%3A0x828d43bf9d9ee343!2sPune%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin"
          title="Anbias HQ — Pune, India"
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          aria-label="Map showing Anbias headquarters in Pune, India">
        </iframe>
        <div class="map-label">📍 Pune, India</div>
      </div>
    </div>

    <!-- Social proof -->
    <div class="proof-card" data-component="social-proof">
      <div class="proof-row">
        <div class="proof-stat">
          <div class="proof-num">150+</div>
          <div class="proof-label">Projects Delivered</div>
        </div>
        <div class="proof-divider"></div>
        <div class="proof-stat">
          <div class="proof-num">4×</div>
          <div class="proof-label">Faster with AI</div>
        </div>
        <div class="proof-divider"></div>
        <div class="proof-stat">
          <div class="proof-num">96%</div>
          <div class="proof-label">Satisfaction</div>
        </div>
      </div>
      <div class="proof-quote">
        "Anbias uncovered <span>4 critical vulnerabilities</span> in our payment flow we had no idea about."
        — Priya S., FinEdge
      </div>
    </div>

    <!-- Availability slots -->
    <div class="avail-card" data-component="availability">
      <div class="avail-title">This Week's Open Slots</div>
      <div class="avail-slots">
        <span class="avail-slot">Mon 10am</span>
        <span class="avail-slot taken">Mon 2pm</span>
        <span class="avail-slot">Tue 11am</span>
        <span class="avail-slot taken">Wed 10am</span>
        <span class="avail-slot">Wed 3pm</span>
        <span class="avail-slot">Thu 10am</span>
        <span class="avail-slot taken">Fri 11am</span>
        <span class="avail-slot">Fri 2pm</span>
      </div>
    </div>

  </aside>
</div>
@endsection

@push('scripts')
<script src="{{ asset('js/contact.js') }}"></script>
@endpush
