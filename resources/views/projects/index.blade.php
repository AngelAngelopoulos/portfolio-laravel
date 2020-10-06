@extends('layout')

@section('title', 'Projects')

@section('content')
  <section id="portfolio" class="portfolio ">
    <div class="container">

      <div class="section-title">

        @isset( $category )
            <h2>{{ $category->name }}</h2>
            <p>Filtered by category: </p>
        @else

            <h2>Portfolio</h2>
            <p>These are some of the projects I have done throughout my professional and student life: </p>
        @endisset
      </div>

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
                  <a class="btn btn-primary mx-auto" href="{{ route('projects.create') }}">
                      Create new project
                  </a>
              </div>
          @endauth










            <div class="d-flex flex-wrap justify-content-between align-items-start">


                @forelse($projects as $project)
                    <div class="card border-0 shadow mx-auto mt-4 card-proj" style="width: 19rem;" data-aos="fade-up" data-aos-delay="100">
                        @if($project->image)
                            <img class="card-img-top" src="{{ /*\Illuminate\Support\Facades\Storage::url(*/ 'https://f002.backblazeb2.com/file/laravel-portfolio/'.$project->image   }}" style="height: 150px; object-fit: cover;" alt="Card image cap">
                        @endif
                        <div class="card-body  rounded card-proj">
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

                <div class="col-10 py-3">
                    <div class="px-5" style="width: 30%"></div>
                    {{ $projects->links() }}
                    <div class="px-5" style="width: 30%"></div>
                </div>

          </div>
        </div>

</section>
@endsection
