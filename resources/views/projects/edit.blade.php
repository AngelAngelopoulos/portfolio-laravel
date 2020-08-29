@extends('layout')

@section('title', 'Edit project')

@section('content')


    @include('partials.validation-errors')
    <section id="login" class="login" data-aos="fade-up">
    <div class="container">
      <div class="section-title">
        <h2>Edit project</h2>
      </div>

    <form
    method="post"
    action="{{ route('projects.update', $project) }}"
    enctype="multipart/form-data"
    id="email-form"
    class="form-group bg-dark mx-auto shadow rounded py-3 px-4 col-lg-11">
        @method('patch')
        @include('projects._form', [
        'action' => 'Update'
        ])
    </form>
</div>
</section>

@endsection
