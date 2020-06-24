@extends('layout')

@section('title', 'Create project')

@section('content')
    <h1>Create new project</h1>

    @include('partials.validation-errors')
    <form method="post" action="{{ route('projects.store') }}">
        @include('projects._form', [
        'action' => 'Create'
        ])


    </form>

@endsection
