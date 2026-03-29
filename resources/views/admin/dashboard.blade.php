@extends('admin.layouts.app')

@section('title', 'Dashboard | Anbias Admin')

@section('content')
    <section class="admin-card">
        <div class="admin-card-body">
            <h1 class="admin-title">Welcome back, {{ session('admin_auth.name') }}.</h1>
            <p class="admin-muted">Minimal control panel for contact strategy-session enquiries.</p>

            <div class="admin-grid">
                <article class="admin-stat">
                    <h3>Total enquiries</h3>
                    <p>{{ number_format($enquiryCount) }}</p>
                </article>

                <article class="admin-stat">
                    <h3>Latest enquiry</h3>
                    <p>{{ $latestEnquiryAt ? \Illuminate\Support\Carbon::parse($latestEnquiryAt)->diffForHumans() : 'No data' }}</p>
                </article>

                <article class="admin-stat">
                    <h3>Quick action</h3>
                    <p><a class="admin-link" href="{{ route('admin.enquiries.index') }}">Open enquiries →</a></p>
                </article>
            </div>
        </div>
    </section>
@endsection
