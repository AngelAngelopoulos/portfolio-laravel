@extends('layout')

@section('title', 'Create project')

@section('content')
    <h1 class="title">Create new project</h1>

    @include('partials.validation-errors')
    <form method="post" action="{{ route('projects.store') }}" enctype="multipart/form-data">
        @include('projects._form', [
        'action' => 'Create'
        ])


    </form>

@endsection
