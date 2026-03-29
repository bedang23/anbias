@extends('admin.layouts.app')

@section('title', 'Create Category | Anbias Admin')

@section('content')
<section class="admin-card">
  <div class="admin-card-body">
    <h1 class="admin-title">Create Category</h1>
    <p class="admin-muted">Add a new taxonomy for blogs or case studies.</p>

    @include('admin.partials.flash')

    <form method="POST" action="{{ route('admin.categories.store') }}">
      @include('admin.categories.form')
    </form>
  </div>
</section>
@endsection
