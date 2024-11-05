@extends('admin.layouts.create-or-edit')

@section('form-title')
    Editing {{$project->title}}
@endsection

@section('form-action')
    {{ route('admin.project.update' $project)}}
@endsection

@section('form-method')
    @method('POST')
@endsection
