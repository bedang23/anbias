@extends('admin.layouts.app')

@section('title', 'Blogs | Anbias Admin')

@section('content')
<section class="admin-card">
  <div class="admin-card-body">
    <div class="admin-topbar">
      <div>
        <h1 class="admin-title">Blogs</h1>
        <p class="admin-muted">Manage blog posts, SEO metadata, and publishing state.</p>
      </div>
      <a href="{{ route('admin.blogs.create') }}" class="admin-btn-inline">Add Blog</a>
    </div>

    @include('admin.partials.flash')

    @if($blogs->isEmpty())
      <div class="admin-empty">No blogs found.</div>
    @else
      <div class="admin-table-wrap">
        <table class="admin-table">
          <thead>
            <tr>
              <th>Title</th>
              <th>Category</th>
              <th>Author</th>
              <th>Status</th>
              <th>Published At</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach($blogs as $blog)
              <tr>
                <td>{{ $blog->title }}</td>
                <td>{{ $blog->category->name }}</td>
                <td>{{ $blog->author->name }}</td>
                <td><span class="admin-chip">{{ $blog->is_published ? 'Published' : 'Draft' }}</span></td>
                <td>{{ optional($blog->published_at)->format('M d, Y H:i') ?: '—' }}</td>
                <td>
                  <div class="admin-actions">
                    <a class="admin-link" href="{{ route('blogs.show', $blog->slug) }}" target="_blank" rel="noopener">View</a>
                    <a class="admin-link" href="{{ route('admin.blogs.edit', $blog) }}">Edit</a>
                    <form method="POST" action="{{ route('admin.blogs.destroy', $blog) }}" onsubmit="return confirm('Delete this blog post?');">
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
      <div class="admin-pagination">{{ $blogs->links() }}</div>
    @endif
  </div>
</section>
@endsection
