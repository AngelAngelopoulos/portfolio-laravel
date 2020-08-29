@extends('layout')

@section('title', 'Create project')

@section('content')


    @include('partials.validation-errors')
    <section id="login" class="login" data-aos="fade-up">

    <div class="container">
      <div class="section-title">
        <h2>Create new project</h2>
      </div>
    <form method="post"
    action="{{ route('projects.store') }}"
    enctype="multipart/form-data"
    id="email-form"
    class="form-group  mx-auto shadow rounded py-3 px-4 col-lg-11">
        @include('projects._form', [
        'action' => 'Create'
        ])


    </form>
  </div>
  </section>
@endsection
