@extends('admin.layouts.create-or-edit')

@section('form-title')
    Create Project
@endsection

@section('form-action')
    {{ route('admin.project.store') }}
@endsection

@section('form-method')
    @method('POST')
@endsection
