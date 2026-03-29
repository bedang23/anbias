@extends('admin.layouts.app')

@section('title', 'Edit Case Study | Anbias Admin')

@section('content')
<section class="admin-card">
  <div class="admin-card-body">
    <h1 class="admin-title">Edit Case Study</h1>
    <p class="admin-muted">Update case study content, SEO metadata, and publishing state.</p>

    @include('admin.partials.flash')

    <form method="POST" action="{{ route('admin.case-studies.update', $caseStudy) }}" enctype="multipart/form-data">
      @method('PUT')
      @include('admin.case-studies.form')
    </form>
  </div>
</section>
@endsection
