@extends('layout')

@section('title', 'Portfolio')

@section('content')
    <h1>Portfolio</h1>
    @auth
        <a href="{{ route('projects.create') }}">Create new project</a>
    @endauth
    <ul>
        @forelse($projects as $project)
            <li>
                <a href="{{ route('projects.show', $project) }}">{{ $project->title }}</a> <br>
                <small>{{ $project->description }}</small>
            </li>
        @empty
            <li>
                No hay proyectos para mostrar
            </li>
        @endforelse
    </ul>
    {{ $projects->links() }}



@endsection
