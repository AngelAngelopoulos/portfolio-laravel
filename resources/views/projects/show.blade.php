@extends('layout')

@section('title', 'Portfolio | '.$project->title)

@section('content')
    <h1>{{ $project->title }}</h1>
    <p>
        {{ $project->description }}
    </p>

    <p>
        {{ $project->created_at->diffForHumans() }}<br>
    </p>
    @auth
        <a href="{{ route('projects.edit', $project) }}" >Editar</a>

        <form method="post" action="{{ route('projects.destroy', $project) }}">
            @csrf
            @method('delete')
            <button type="submit">Eliminar</button>
        </form>
    @endauth

@endsection

