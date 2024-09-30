
@extends('admin.partials.app')
@section('title', 'Dashboard')
@section('content')  
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Edit Portfolio</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Portfolio Details</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.portfolios.update', $portfolio->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $portfolio->title }}" required>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3" required>{{ $portfolio->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="stack">Stack (comma-separated)</label>
                    <input type="text" class="form-control" id="stack" name="stack" value="{{ $portfolio->stack }}" required>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control-file" id="image" name="image">
                    @if($portfolio->image_path)
                        <img src="{{ asset('storage/' . $portfolio->image_path) }}" alt="Current Image" class="mt-2" style="max-width: 200px;">
                    @endif
                </div>
                <div class="form-group">
                    <label for="project_url">Project URL</label>
                    <input type="url" class="form-control" id="project_url" name="project_url" value="{{ $portfolio->project_url }}">
                </div>
                <div class="form-group">
                    <label for="completion_date">Completion Date</label>
                    <input type="date" class="form-control" id="completion_date" name="completion_date" value="{{ $portfolio->completion_date }}">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection