@extends('admin.layouts.app')

@section('title', 'Create Case Study | Anbias Admin')

@section('content')
<section class="admin-card">
  <div class="admin-card-body">
    <h1 class="admin-title">Create Case Study</h1>
    <p class="admin-muted">Publish a new delivery case study with SEO metadata.</p>

    @include('admin.partials.flash')

    <form method="POST" action="{{ route('admin.case-studies.store') }}" enctype="multipart/form-data">
      @include('admin.case-studies.form')
    </form>
  </div>
</section>
@endsection
