@extends('layout')

@section('title', 'Portfolio')

@section('content')
    <div class="container">
        <div class="col-sm-12 col-md-12 col-lg-12 m-auto">
            @isset( $category )
                <h1 class="my-3 title" align="center">{{ $category->name }}</h1>
            @else
                <h1 class="my-3 title" align="center">Portfolio</h1>
            @endisset
            <div class="col-12 mx-auto d-flex justify-content-between">


                @isset( $category )
                    <div class="py-2 ">
                        <a class="btn btn-secondary" href="{{ route('projects.index') }}">
                            Return to Portfolio
                        </a>
                    </div>
                @else

                @endisset

                    @auth
                        <div class="py-2">
                            <a class="btn btn-primary" href="{{ route('projects.create') }}">
                                Create new project
                            </a>
                        </div>
                    @endauth
            </div>




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
                            <div class="d-flex justify-content-between align-items-center">
                                <a class="float-right" href="{{ route('projects.show', $project) }}">See more</a>
                                @if( $project->category_id )
                                    <a href="{{ route('categories.show', $project->category) }}"

                                       class="badge badge-secondary" >{{ $project->category->name }}</a>
                                @endif
                            </div>
                        </div>
                    </div>
                @empty
                    <span class="text-info mx-auto">
                        There are not projects to show
                    </span>
                @endforelse


            </div>
                <div class="col-10 py-3">
                    <div class="px-5" style="width: 30%"></div>
                    {{ $projects->links() }}
                    <div class="px-5" style="width: 30%"></div>
                </div>
                <div>

                </div>
        </div>
</div>
@endsection
