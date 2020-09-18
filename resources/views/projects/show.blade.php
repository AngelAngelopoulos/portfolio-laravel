@extends('layout')

@section('title', 'Portfolio | '.$project->title)

@section('content')
  <section id="portfolio-details mt-5" class="portfolio-details">
    <div class="container">
      <div class="portfolio-details-container">

          <div class="owl-carousel portfolio-details-carousel" data-aos="fade-left">
            @if($project->image)
                <img class="card-img-top mx-2 image-fluid" style="width: 100%"  src="{{ /*\Illuminate\Support\Facades\Storage::url(*/ 'https://f002.backblazeb2.com/file/laravel-portfolio/'.$project->image  }}" alt="{{ $project->image }}">
            @endif
          </div>

          <div class="portfolio-info" data-aos="fade-right">
            <h3>Project information</h3>
            <ul>
              <li><strong>Category</strong>:
                @if( $project->category_id )
                    <a href="{{ route('categories.show', $project->category) }}"

                        >{{ $project->category->name }}</a>
                @else
                  <span class="text-black-50">Not available</span>
                @endif
              </li>
              <li><strong>Project date</strong>: {{ date_format($project->created_at, "F jS, Y") }}</li>
              @if ($project->link)
                <li><strong>Project URL</strong>: <a href="{{ $project->link }}">{{ $project->link }}</a></li>
              @else
                <li><strong>Project URL</strong>: <span class="text-black-50">Not available</span></li>
              @endif

            </ul>
          </div>
        </div>

        <div class="portfolio-description" data-aos="fade-up">
          <h2>{{ $project->title }}</h2>
            <p class="p-0 m-0" style="white-space: pre-line">
                {{ $project->description }}
          </p>

          <div class="d-flex justify-content-between mt-5">
            <div class=" float-left">
              <a class="btn btn-dark rounded-pill" href="{{ route('projects.index') }}">Return to portfolio</a>
            </div>

            @auth
                <div class="d-flex align-items-center float-right">
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
    </section>


@endsection
