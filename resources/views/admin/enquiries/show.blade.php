@extends('admin.layouts.app')

@section('title', 'Enquiry #'.$enquiry->id.' | Anbias Admin')

@section('content')
    <section class="admin-card">
        <div class="admin-card-body">
            <h1 class="admin-title">Enquiry #{{ $enquiry->id }}</h1>
            <p class="admin-muted">Submitted on {{ $enquiry->created_at?->format('M d, Y H:i') }}</p>

            <div class="admin-details" style="margin-top:18px;">
                <article class="admin-detail"><h4>Full name</h4><p>{{ $enquiry->full_name }}</p></article>
                <article class="admin-detail"><h4>Email</h4><p>{{ $enquiry->email }}</p></article>
                <article class="admin-detail"><h4>Phone</h4><p>{{ $enquiry->phone_number ?: '—' }}</p></article>
                <article class="admin-detail"><h4>Enquiry type</h4><p>{{ ucfirst($enquiry->enquiry_type ?: 'contact') }}</p></article>
                <article class="admin-detail"><h4>Service page</h4><p>{{ $enquiry->service_slug ?: '—' }}</p></article>
                <article class="admin-detail"><h4>Company</h4><p>{{ $enquiry->company_name ?: '—' }}</p></article>
                <article class="admin-detail"><h4>Website</h4><p>{{ $enquiry->website_url ?: '—' }}</p></article>
                <article class="admin-detail"><h4>Primary goal</h4><p>{{ $enquiry->primary_goal ?: '—' }}</p></article>
                <article class="admin-detail"><h4>Tech stack</h4><p>{{ $enquiry->tech_stack ?: '—' }}</p></article>
                <article class="admin-detail"><h4>Budget range</h4><p>{{ $enquiry->budget_range ?: '—' }}</p></article>
                <article class="admin-detail"><h4>Timeline</h4><p>{{ $enquiry->timeline ?: '—' }}</p></article>
                <article class="admin-detail"><h4>Preferred contact</h4><p>{{ $enquiry->preferred_contact ?: '—' }}</p></article>
                <article class="admin-detail"><h4>IP address</h4><p>{{ $enquiry->ip_address ?: '—' }}</p></article>
            </div>

            <article class="admin-detail" style="margin-top:12px;">
                <h4>Message</h4>
                <p>{{ $enquiry->message }}</p>
            </article>

            <div style="margin-top:16px;">
                <a class="admin-link" href="{{ route('admin.enquiries.index') }}">← Back to enquiries</a>
            </div>
        </div>
    </section>
@endsection
