
@extends('admin.partials.app')
@section('title', 'Edit Technical Skill')
@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Edit Technical Skill</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Technical Skill Details</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.technical_skills.update', $technicalSkill->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $technicalSkill->name }}" required>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3">{{ $technicalSkill->description }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection