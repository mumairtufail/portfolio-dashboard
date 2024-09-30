
@extends('admin.partials.app')
@section('title', 'Add Technical Skill')
@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Add Technical Skill</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Technical Skill Details</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.technical_skills.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
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