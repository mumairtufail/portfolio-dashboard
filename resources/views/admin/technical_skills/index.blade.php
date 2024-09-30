
@extends('admin.partials.app')
@section('title', 'Technical Skills')
@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Technical Skills</h1>
    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if(session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
    @endif
    <div class="card shadow mb-4">
               <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Technical Skills List</h6>
            <a href="{{ route('admin.technical_skills.create') }}" class="btn btn-primary">Add Technical Skill</a>
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
                        @foreach($technicalSkills as $technicalSkill)
                            <tr>
                                <td>{{ $technicalSkill->name }}</td>
                                <td>{{ $technicalSkill->description }}</td>
                                <td>
                                    <a href="{{ route('admin.technical_skills.edit', $technicalSkill->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                    <form action="{{ route('admin.technical_skills.destroy', $technicalSkill->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
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