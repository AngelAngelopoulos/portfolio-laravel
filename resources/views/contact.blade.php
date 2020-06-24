@extends('layout')

@section('title', 'Contact')

@section('content')
    <h1>Contact</h1>

    <form method="post" action="{{ route('contact')  }}">
        @csrf
        <input name="name" type="text" value="{{ old('name') }}" placeholder="Name..."><br>
        {!! $errors->first('name', '<small>:message</small><br>') !!}

        <input name="email" type="email" value="{{ old('email') }}" placeholder="Email..."><br>
        {!! $errors->first('email', '<small>:message</small><br>') !!}

        <input name="subject" type="text" value="{{ old('subject') }}" placeholder="Subject..."><br>
        {!! $errors->first('subject', '<small>:message</small><br>') !!}

        <input name="message" type="text" value="{{ old('message') }}" placeholder="Message..."><br>
        {!! $errors->first('message', '<small>:message</small><br>') !!}
        <button type="submit">Send</button>
    </form>
@endsection
