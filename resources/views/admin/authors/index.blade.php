@extends('admin.layouts.app')

@section('title', 'Authors | Anbias Admin')

@section('content')
<section class="admin-card">
  <div class="admin-card-body">
    <div class="admin-topbar">
      <div>
        <h1 class="admin-title">Authors</h1>
        <p class="admin-muted">Manage author profiles used in blogs and case studies.</p>
      </div>
      <a href="{{ route('admin.authors.create') }}" class="admin-btn-inline">Add Author</a>
    </div>

    @include('admin.partials.flash')

    @if ($authors->isEmpty())
      <div class="admin-empty">No authors found.</div>
    @else
      <div class="admin-table-wrap">
        <table class="admin-table">
          <thead>
            <tr>
              <th>Name</th>
              <th>Designation</th>
              <th>Experience</th>
              <th>Slug</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach($authors as $author)
              <tr>
                <td>{{ $author->name }}</td>
                <td>{{ $author->designation ?: '—' }}</td>
                <td>{{ $author->years_experience }} years</td>
                <td>{{ $author->slug }}</td>
                <td>
                  <div class="admin-actions">
                    <a class="admin-link" href="{{ route('admin.authors.edit', $author) }}">Edit</a>
                    <form method="POST" action="{{ route('admin.authors.destroy', $author) }}" onsubmit="return confirm('Delete this author?');">
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
      <div class="admin-pagination">{{ $authors->links() }}</div>
    @endif
  </div>
</section>
@endsection
