@extends('admin.layouts.app')

@section('title', 'Categories | Anbias Admin')

@section('content')
<section class="admin-card">
  <div class="admin-card-body">
    <div class="admin-topbar">
      <div>
        <h1 class="admin-title">Categories</h1>
        <p class="admin-muted">Manage blog and case study categories.</p>
      </div>
      <a href="{{ route('admin.categories.create') }}" class="admin-btn-inline">Add Category</a>
    </div>

    @include('admin.partials.flash')

    @if($categories->isEmpty())
      <div class="admin-empty">No categories found.</div>
    @else
      <div class="admin-table-wrap">
        <table class="admin-table">
          <thead>
            <tr>
              <th>Name</th>
              <th>Type</th>
              <th>Slug</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach($categories as $category)
              <tr>
                <td>{{ $category->name }}</td>
                <td><span class="admin-chip">{{ $category->type === 'blog' ? 'Blog' : 'Case Study' }}</span></td>
                <td>{{ $category->slug }}</td>
                <td>
                  <div class="admin-actions">
                    <a class="admin-link" href="{{ route('admin.categories.edit', $category) }}">Edit</a>
                    <form method="POST" action="{{ route('admin.categories.destroy', $category) }}" onsubmit="return confirm('Delete this category?');">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="admin-link admin-link-btn admin-link-danger">Delete</button>
                    </form>
                  </div>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <div class="admin-pagination">{{ $categories->links() }}</div>
    @endif
  </div>
</section>
@endsection
