@extends('layouts.app')

@section('title', 'Terms & Conditions | Anbias')
@section('meta_description', 'Read Anbias terms and conditions for project scope, payment terms, delivery, revisions, and liabilities.')

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
      <span class="current">Terms & Conditions</span>
    </div>

    <div class="info-eyebrow">Legal</div>
    <h1 class="info-title">Terms &<br><span class="ol">Conditions</span></h1>
    <p class="info-sub">These terms govern all project work and consulting services provided by Anbias.</p>
  </div>
</section>

<section class="info-main">
  <div class="container">
    <div class="info-grid">
      <article class="info-card-wide">
        <h2>1. Service Scope</h2>
        <p>Work begins based on mutually confirmed scope, timeline, and pricing. Additional features or scope changes may require revised timelines and costs.</p>

        <h2>2. Payment Terms</h2>
        <p>
          We generally require an advance payment before project execution. This advance reserves delivery capacity,
          discovery effort, and initial execution work.
        </p>
        <p><strong style="color:var(--lime)">Project initiation advance/retainer is non-refundable once work has started.</strong></p>

        <h2>3. Billing and Taxes</h2>
        <p>
          Invoices, receipts, and applicable tax treatment are handled based on jurisdiction and project requirements.
          Clients are responsible for complying with local tax rules applicable to their business and payments.
        </p>

        <h2>4. Delivery and Revisions</h2>
        <p>Estimated timelines are shared in good faith and depend on timely client feedback, approvals, and content availability. Revision rounds are limited as defined in the confirmed proposal.</p>

        <h2>5. Client Responsibilities</h2>
        <p>Clients are responsible for providing accurate content, legal rights for assets/materials, and timely communication needed for delivery milestones.</p>

        <h2>6. Intellectual Property</h2>
        <p>On full payment of agreed fees, final deliverables are transferred to the client unless otherwise stated in writing for specific licensed assets or third-party tools.</p>

        <h2>7. Limitation of Liability</h2>
        <p>Anbias is not liable for indirect, incidental, or consequential damages. Liability is limited to fees paid for the concerned project phase.</p>

        <h2>8. Contact</h2>
        <p>For terms queries, reach us at <a href="mailto:contact@anbias.com" style="color:var(--lime);text-decoration:none;">contact@anbias.com</a>.</p>
      </article>
    </div>
  </div>
</section>
@endsection
