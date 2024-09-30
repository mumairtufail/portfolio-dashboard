
@extends('admin.partials.app')
@section('title', 'Soft Skills')
@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Soft Skills</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">All Soft Skills</h6>
            <a href="{{ route('admin.soft_skills.create') }}" class="btn btn-primary float-right">Add New Soft Skill</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($softSkills as $softSkill)
                        <tr>
                            <td>{{ $softSkill->name }}</td>
                            <td>{{ $softSkill->description }}</td>
                            <td>
                                <a href="{{ route('admin.soft_skills.edit', $softSkill->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                <form action="{{ route('admin.soft_skills.destroy', $softSkill->id) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this soft skill?')">Delete</button>
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