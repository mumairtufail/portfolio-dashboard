
@extends('admin.partials.app')
@section('title', 'Experiences')
@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Experiences</h1>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Experience List</h6>
            <a href="{{ route('admin.experiences.create') }}" class="btn btn-primary">Add Experience</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Company Name</th>
                            <th>Company Logo</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($experiences as $experience)
                            <tr>
                                <td>{{ $experience->title }}</td>
                                <td>{{ $experience->company_name }}</td>
                                <td>
                                    @if($experience->company_logo)
                                        <img src="{{ asset('storage/' . $experience->company_logo) }}" alt="Company Logo" width="50">
                                    @endif
                                </td>
                                <td>{{ $experience->start_date }}</td>
                                <td>{{ $experience->is_continued ? 'Continued' : $experience->end_date }}</td>
                                <td>{{ $experience->description }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('admin.experiences.edit', $experience->id) }}" class="btn btn-primary btn-sm mr-2">Edit</a>
                                        <form action="{{ route('admin.experiences.destroy', $experience->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </div>
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