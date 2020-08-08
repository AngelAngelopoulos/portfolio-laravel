@extends('layout')

@section('title', 'Portfolio | '.$project->title)

@section('content')
    <div class="container">
        <div class="row">

                <div class="col-11 py-2 px-lg-4 p-sm-3  shadow rounded descript-proj mx-auto">

                    <h1 class="card-title text-center py-2">{{ $project->title }}</h1>
                    <hr>
                    @if($project->image)
                        <img class="card-img-top shadow rounded mx-2" style="width: 80%"  src="{{ \Illuminate\Support\Facades\Storage::url($project->image)  }}" alt="{{ $project->image }}">
                    @endif

                    <p class="text-black-50 pt-4 px-2">
                        <b>Created at: </b>{{ date_format($project->created_at, "F jS, Y") }}<br>
                    </p>
                    <p class="card-text text-black-80 px-2" style="font-size: 1em;">
                        {{ $project->description }}
                    </p>
                    <a class="btn btn-dark rounded-pill px-2 my-2" href="{{ route('projects.index') }}">Return to portfolio</a>
                    @auth
                        <div class="d-flex my-2">
                            <a class="btn btn-dark" href="{{ route('projects.edit', $project) }}" >Editar</a>

                            <form class="p-0 m-0" method="post" action="{{ route('projects.destroy', $project) }}">

                                @csrf
                                @method('delete')
                                <button class="btn btn-danger" type="submit">Eliminar</button>
                            </form>
                        </div>

                    @endauth
                </div>
        </div>
    </div>


@endsection

