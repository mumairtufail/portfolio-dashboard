
@extends('admin.partials.app')
@section('title', 'Dashboard')
@section('content')  
<!-- Tagify CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tagify/4.9.3/tagify.css">
<!-- Tagify JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tagify/4.9.3/tagify.min.js"></script>
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Portfolios</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">All Portfolios</h6>
            <a href="{{ route('admin.portfolios.create') }}" class="btn btn-primary float-right">Add New Portfolio</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Stack</th>
                            <th>Project URL</th>
                            <th>Completion Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($portfolios as $portfolio)
                        <tr>
                            <td>{{ $portfolio->title }}</td>
                            <td>
                                <input name="stack" class="form-control tagify-input" value="{{ $portfolio->stack }}">
                            </td>
                            <td>{{ $portfolio->project_url }}</td>
                            <td>{{ $portfolio->completion_date }}</td>
                            <td>
                                <a href="{{ route('admin.portfolios.edit', $portfolio->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                <form action="{{ route('admin.portfolios.destroy', $portfolio->id) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this portfolio?')">Delete</button>
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

<!-- Tagify Initialization -->
<!-- Tagify Initialization -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var inputElements = document.querySelectorAll('.tagify-input');
        inputElements.forEach(function(input) {
            new Tagify(input);
        });
    });
</script>
@endsection