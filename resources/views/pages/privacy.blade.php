@extends('layouts.app')

@section('title', 'Privacy Policy | Anbias')
@section('meta_description', 'Read the privacy policy for Anbias services, including data usage, communication, and payment handling notes.')

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
      <span class="current">Privacy Policy</span>
    </div>

    <div class="info-eyebrow">Legal</div>
    <h1 class="info-title">Privacy<br><span class="ol">Policy</span></h1>
    <p class="info-sub">This policy explains how Anbias collects, uses, and protects client and visitor data.</p>
  </div>
</section>

<section class="info-main">
  <div class="container">
    <div class="info-grid">
      <article class="info-card-wide">
        <h2>1. Information We Collect</h2>
        <p>We may collect your name, email, phone number, company details, website details, project requirements, and communication history when you contact us or submit forms.</p>

        <h2>2. How We Use Information</h2>
        <p>We use your information to respond to enquiries, prepare project proposals, deliver services, share updates, and improve delivery quality.</p>

        <h2>3. Data Sharing</h2>
        <p>We do not sell personal data. We only share data with essential service providers (for hosting, communication, analytics, payment handling) when operationally required.</p>

        <h2>4. Data Security</h2>
        <p>We follow practical security controls including access restriction, secure credentials, and limited data exposure. No internet transmission is fully risk-free, but we take reasonable safeguards.</p>

        <h2>5. Payments and Transaction Data</h2>
        <p>
          For project billing, we may process limited payment-related data such as payer name, transaction reference, amount,
          and billing communication records. We do not store sensitive card credentials on our servers.
          Payment processing may involve trusted third-party banking or payment providers.
        </p>

        <h2>6. Your Privacy Rights</h2>
        <p>
          You may request access, correction, or deletion of personal information shared with us, subject to legal or operational
          retention requirements. To request an update, please contact us at the email below.
        </p>

        <h2>7. Contact</h2>
        <p>For privacy requests or clarifications, email <a href="mailto:contact@anbias.com" style="color:var(--lime);text-decoration:none;">contact@anbias.com</a>.</p>
      </article>
    </div>
  </div>
</section>
@endsection
