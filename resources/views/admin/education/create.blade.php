<!-- resources/views/admin/education/create.blade.php -->
@extends('admin.partials.app')
@section('title', 'Add Education')
@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Add New Education</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Education Details</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.education.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="institution">Institution</label>
                    <input type="text" class="form-control" id="institution" name="institution" required>
                </div>
                <div class="form-group">
                    <label for="degree">Degree</label>
                    <input type="text" class="form-control" id="degree" name="degree" required>
                </div>
                <div class="form-group">
                    <label for="field_of_study">Field of Study</label>
                    <input type="text" class="form-control" id="field_of_study" name="field_of_study" required>
                </div>
                <div class="form-group">
                    <label for="start_date">Start Date</label>
                    <input type="date" class="form-control" id="start_date" name="start_date" required>
                </div>
                <div class="form-group">
                    <label for="end_date">End Date</label>
                    <input type="date" class="form-control" id="end_date" name="end_date">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection