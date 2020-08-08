@extends('layout')

@section('title', 'Portfolio')

@section('content')

    <h1 class="py-3 title" align="center">Portfolio</h1>
    <div class="container">
        <div class="col-sm-12 col-md-12 col-lg-12 m-auto">
            @auth
                <a class="btn btn-primary" href="{{ route('projects.create') }}">Create new project</a>
            @endauth


            <div class="d-flex flex-wrap justify-content-between align-items-start">
                @forelse($projects as $project)
                    <div class="card border-0 shadow mx-auto mt-4 bg-dark" style="width: 18rem;">
                        @if($project->image)
                            <img class="card-img-top" src="{{ \Illuminate\Support\Facades\Storage::url($project->image)  }}" style="height: 150px; object-fit: cover;" alt="Card image cap">
                        @endif
                        <div class="card-body bg-dark rounded">
                                <h5 class="card-title text-light">{{ $project->title }}</h5>
                                <p class="card-text text-white-50">{{ $project->created_at->diffForHumans() }}</p>
                                <p class="card-text text-truncate text-light">{{ $project->description }}</p>
                                <a class="float-right" href="{{ route('projects.show', $project) }}">See more</a>

                        </div>
                    </div>
                    </li>
                @empty
                    <span class="text-info mx-auto">
                        There are not projects to show
                    </span>
                @endforelse
            </div>
            {{ $projects->links() }}
        </div>
    </div>




@endsection
