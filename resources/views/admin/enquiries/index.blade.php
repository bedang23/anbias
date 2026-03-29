@extends('admin.layouts.app')

@section('title', 'Enquiries | Anbias Admin')

@section('content')
    <section class="admin-card">
        <div class="admin-card-body">
            <h1 class="admin-title">Contact Enquiries</h1>
            <p class="admin-muted">All submitted Technical Strategy Session requests.</p>

            @if ($enquiries->isEmpty())
                <div class="admin-empty">No enquiries yet.</div>
            @else
                <div class="admin-table-wrap">
                    <table class="admin-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Goal</th>
                                <th>Submitted</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($enquiries as $enquiry)
                                <tr>
                                    <td>#{{ $enquiry->id }}</td>
                                    <td>{{ $enquiry->full_name }}</td>
                                    <td>{{ $enquiry->email }}</td>
                                    <td><span class="admin-chip">{{ $enquiry->primary_goal }}</span></td>
                                    <td>{{ $enquiry->created_at?->format('M d, Y H:i') }}</td>
                                    <td><a class="admin-link" href="{{ route('admin.enquiries.show', $enquiry) }}">View</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="admin-pagination">
                    {{ $enquiries->links() }}
                </div>
            @endif
        </div>
    </section>
@endsection
