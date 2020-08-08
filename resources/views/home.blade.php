@extends('layout')

@section('title', 'Angel Alvarado - My website')

@section('content')
    <div class="container">
        <img class="back col-sm-12 col-lg-6 float-right py-sm-2 pr-lg-1 mx-3 m-auto pb-2" src="img/background.jpg ">
            <h1 class="text-center text-sm-center text-lg-left py-3 title">Hello. My name is Angel.</h1>
            <div class="mr-lg-2">
                <span class="text-white card-text">
        Those are my domains (literally), feel you comfortable to contact and message me. <br>My job is transform your ideas in reality,
        so, don't be you afraid and take a tour.
            </span>
            </div>

        <div class="row align-content-center col-sm-6 mx-0 float-lg-left col-lg-3 px-0 p-0 m-0">
            <a class="btn btn-primary my-3 btn-dark rounded-pill col-sm-6 align-self-lg-center mx-sm-0 text-white text-decoration-none" href="{{ route('about') }}">
                    Get Started
            </a>
        </div>

        </div>



@endsection
