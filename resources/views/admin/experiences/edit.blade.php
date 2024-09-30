
@extends('admin.partials.app')
@section('title', 'Edit Experience')
@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Edit Experience</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Experience Details</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.experiences.update', $experience->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $experience->title }}">
                </div>
                <div class="form-group">
                    <label for="company_name">Company Name</label>
                    <input type="text" class="form-control" id="company_name" name="company_name" value="{{ $experience->company_name }}">
                </div>
                <div class="form-group">
                    <label for="company_logo">Company Logo</label>
                    <input type="file" class="form-control-file" id="company_logo" name="company_logo">
                    @if($experience->company_logo)
                        <img src="{{ asset('storage/' . $experience->company_logo) }}" alt="Company Logo" width="50">
                    @endif
                </div>
                <div class="form-group">
                    <label for="start_date">Start Date</label>
                    <input type="date" class="form-control" id="start_date" name="start_date" value="{{ $experience->start_date }}">
                </div>
                <div class="form-group">
                    <label for="end_date">End Date</label>
                    <input type="date" class="form-control" id="end_date" name="end_date" value="{{ $experience->end_date }}">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="is_continued" name="is_continued" {{ $experience->is_continued ? 'checked' : '' }}>
                    <label class="form-check-label" for="is_continued">Continued</label>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3">{{ $experience->description }}</textarea>
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection