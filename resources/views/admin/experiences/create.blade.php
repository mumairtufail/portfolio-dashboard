
@extends('admin.partials.app')
@section('title', 'Add Experience')
@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Add Experience</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Experience Details</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.experiences.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="form-group">
                    <label for="company_name">Company Name</label>
                    <input type="text" class="form-control" id="company_name" name="company_name">
                </div>
                <div class="form-group">
                    <label for="company_logo">Company Logo</label>
                    <input type="file" class="form-control-file" id="company_logo" name="company_logo">
                </div>
                <div class="form-group">
                    <label for="start_date">Start Date</label>
                    <input type="date" class="form-control" id="start_date" name="start_date">
                </div>
                <div class="form-group">
                    <label for="end_date">End Date</label>
                    <input type="date" class="form-control" id="end_date" name="end_date">
                </div>
                <div class="form-group form-check">
                    <input type="hidden" name="is_continued" value="0">
                    <input type="checkbox" class="form-check-input" id="is_continued" name="is_continued" value="1">
                    <label class="form-check-label" for="is_continued">Continued</label>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection