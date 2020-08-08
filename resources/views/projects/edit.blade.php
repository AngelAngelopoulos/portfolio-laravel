@extends('layout')

@section('title', 'Edit project')

@section('content')
    <h1 class="title">Edit project</h1>

    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    @endif

    <form method="post" action="{{ route('projects.update', $project) }}" enctype="multipart/form-data">
        @method('patch')
        @include('projects._form', [
        'action' => 'Update'
        ])
    </form>

@endsection
