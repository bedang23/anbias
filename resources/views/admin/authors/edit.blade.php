@extends('admin.layouts.app')

@section('title', 'Edit Author | Anbias Admin')

@section('content')
<section class="admin-card">
  <div class="admin-card-body">
    <h1 class="admin-title">Edit Author</h1>
    <p class="admin-muted">Update author profile details.</p>

    @include('admin.partials.flash')

    <form method="POST" action="{{ route('admin.authors.update', $author) }}">
      @method('PUT')
      @include('admin.authors.form')
    </form>
  </div>
</section>
@endsection
