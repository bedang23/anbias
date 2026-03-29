@extends('admin.layouts.app')

@section('title', 'Create Author | Anbias Admin')

@section('content')
<section class="admin-card">
  <div class="admin-card-body">
    <h1 class="admin-title">Create Author</h1>
    <p class="admin-muted">Add a new author profile for publishing.</p>

    @include('admin.partials.flash')

    <form method="POST" action="{{ route('admin.authors.store') }}">
      @include('admin.authors.form')
    </form>
  </div>
</section>
@endsection
