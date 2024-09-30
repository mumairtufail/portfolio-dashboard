<!-- resources/views/admin/education/index.blade.php -->
@extends('admin.partials.app')
@section('title', 'My Education')
@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">My Education</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">All Education</h6>
            <a href="{{ route('admin.education.create') }}" class="btn btn-primary float-right">Add New Education</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Institution</th>
                            <th>Degree</th>
                            <th>Field of Study</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($educations as $education)
                        <tr>
                            <td>{{ $education->institution }}</td>
                            <td>{{ $education->degree }}</td>
                            <td>{{ $education->field_of_study }}</td>
                            <td>{{ \Carbon\Carbon::parse($education->start_date)->format('M Y') }}</td>
                            <td>{{ $education->end_date ? \Carbon\Carbon::parse($education->end_date)->format('M Y') : 'Present' }}</td>
                            <td>
                                <a href="{{ route('admin.education.edit', $education->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                <form action="{{ route('admin.education.destroy', $education->id) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this education?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection