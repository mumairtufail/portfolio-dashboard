@extends('UserSide.partials.app')
@section('title', 'Create Portfolio')
@section('content')
<div class="pc-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Create Portfolio</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('portfolios.index') }}">Portfolios</a></li>
                            <li class="breadcrumb-item">Create</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->

        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Create New Portfolio</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('portfolios.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="stack">Stack</label>
                                <div id="stack-container">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="stack[]" required>
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary add-stack" type="button">+</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" class="form-control-file" id="image" name="image">
                            </div>
                            <div class="form-group">
                                <label for="project_url">Project URL</label>
                                <input type="url" class="form-control" id="project_url" name="project_url">
                            </div>
                            <div class="form-group">
                                <label for="completion_date">Completion Date</label>
                                <input type="date" class="form-control" id="completion_date" name="completion_date">
                            </div>
                            <button type="submit" class="btn btn-primary">Create Portfolio</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const stackContainer = document.getElementById('stack-container');
    const addStackButton = stackContainer.querySelector('.add-stack');

    addStackButton.addEventListener('click', function() {
        const newStackInput = document.createElement('div');
        newStackInput.className = 'input-group mb-3';
        newStackInput.innerHTML = `
            <input type="text" class="form-control" name="stack[]" required>
            <div class="input-group-append">
                <button class="btn btn-outline-secondary remove-stack" type="button">-</button>
            </div>
        `;
        stackContainer.insertBefore(newStackInput, addStackButton.parentElement.parentElement.nextSibling);

        newStackInput.querySelector('.remove-stack').addEventListener('click', function() {
            stackContainer.removeChild(newStackInput);
        });
    });
});
</script>
@endsection