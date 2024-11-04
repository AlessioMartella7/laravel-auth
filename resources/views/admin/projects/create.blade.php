@extends('layouts.app')

@section('page-title', 'Create Project')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center my-5 text-primary">
                    Create Project
                </h1>
            </div>
            <div class="col-12">
                <form action="{{ route('admin.project.store') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="url">URL</label>
                        <input type="url" class="form-control" id="url" name="url" required>
                    </div>

                    <div class="form-group">
                        <label for="start_date">Start Date</label>
                        <input type="date" class="form-control" id="start_date" name="start_date" required>
                    </div>

                    <div class="form-group">
                        <label for="end_date">End Date</label>
                        <input type="date" class="form-control" id="end_date" name="end_date" required>
                    </div>

                    <div class="form-group">
                        <label for="programming_language">Programming Language</label>
                        <select class="form-control" id="programming_language" name="programming_language" required>
                            <option value="PHP">PHP</option>
                            <option value="JavaScript">JavaScript</option>
                            <option value="Python">Python</option>
                            <option value="Ruby">Ruby</option>
                            <option value="Java">Java</option>
                        </select>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Create Project</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
