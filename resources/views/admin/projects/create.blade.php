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
            <div class="col-12 d-flex justify-content-center ">

                <form action="{{ route('admin.project.store') }}" method="POST" class="w-50">
                    @csrf

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ old('name') }}">
                        @error('name')
                            <div class="alert alert-warning mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title"
                            value="{{ old('title') }}">
                        @error('title')
                            <div class="alert alert-warning mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3">{{ old('description') }}</textarea>
                        @error('description')
                            <div class="alert alert-warning mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="url">URL</label>
                        <input type="url" class="form-control" id="url" name="url"
                            value="{{ old('url') }}">
                        @error('url')
                            <div class="alert alert-warning mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="start_date">Start Date</label>
                        <input type="date" class="form-control" id="start_date" name="start_date"
                            value="{{ old('start_date') }}">
                        @error('start_date')
                            <div class="alert alert-warning mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="end_date">End Date</label>
                        <input type="date" class="form-control" id="end_date" name="end_date"
                            value="{{ old('end_date') }}>
                        @error('end_date')
<div class="alert
                            alert-warning mt-2">{{ $message }}
                    </div>
                @enderror
        </div>

        <div class="form-group">
            <label for="programming_language">Programming Language</label>
            <select class="form-control" id="programming_language" name="programming_language">
                <option value="PHP">PHP</option>
                <option value="JavaScript">JavaScript</option>
                <option value="Python">Python</option>
                <option value="Ruby">Ruby</option>
                <option value="Java">Java</option>
            </select>
        </div>

        <div class="text-center my-3">
            <button type="submit" class="btn btn-success">Create Project</button>
        </div>
        </form>
    </div>
</div>
</div>

@endsection
