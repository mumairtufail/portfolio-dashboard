<!-- resources/views/admin/education/edit.blade.php -->
@extends('admin.partials.app')
@section('title', 'Edit Education')
@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Edit Education</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Education Details</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.education.update', $education->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="institution">Institution</label>
                    <input type="text" class="form-control" id="institution" name="institution" value="{{ $education->institution }}" required>
                </div>
                <div class="form-group">
                    <label for="degree">Degree</label>
                    <input type="text" class="form-control" id="degree" name="degree" value="{{ $education->degree }}" required>
                </div>
                <div class="form-group">
                    <label for="field_of_study">Field of Study</label>
                    <input type="text" class="form-control" id="field_of_study" name="field_of_study" value="{{ $education->field_of_study }}" required>
                </div>
                <div class="form-group">
                    <label for="start_date">Start Date</label>
                    <input type="date" class="form-control" id="start_date" name="start_date" value="{{ $education->start_date ? \Carbon\Carbon::parse($education->start_date)->format('Y-m-d') : '' }}" required>
                </div>
                <div class="form-group">
                    <label for="end_date">End Date</label>
                    <input type="date" class="form-control" id="end_date" name="end_date" value="{{ $education->end_date ? \Carbon\Carbon::parse($education->end_date)->format('Y-m-d') : '' }}">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3">{{ $education->description }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection