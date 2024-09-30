
@extends('admin.partials.app')
@section('title', 'Edit Soft Skill')
@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Edit Soft Skill</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Soft Skill Details</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.soft_skills.update', $softSkill->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $softSkill->name }}" required>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3">{{ $softSkill->description }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection