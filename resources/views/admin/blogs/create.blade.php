@extends('admin.layouts.app')

@section('title', 'Create Blog | Anbias Admin')

@section('content')
<section class="admin-card">
  <div class="admin-card-body">
    <h1 class="admin-title">Create Blog</h1>
    <p class="admin-muted">Publish a new blog post with SEO metadata and featured image.</p>

    @include('admin.partials.flash')

    <form method="POST" action="{{ route('admin.blogs.store') }}" enctype="multipart/form-data">
      @include('admin.blogs.form')
    </form>
  </div>
</section>
@endsection
