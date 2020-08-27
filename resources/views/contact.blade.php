@extends('layout')

@section('title', 'Contact')

@section('content')
    <div class="container">
        <div class="col-12 col-sm-10 col-lg-8 mx-auto">
            <h1 class="title my-3">Contact me</h1>

            <form method="post" action="{{ route('contact') }}"
                  class="bg-dark text-white shadow rounded py-3 px-4">
                @csrf

                @include('partials.input', [
                    'inputName' => 'name',
                    'labelText' => 'Name',
                    'inputPlaceholder' => 'Your full name here...',
                    'typeInput' => 'text'
                ])

                @include('partials.input', [
                    'inputName' => 'email',
                    'labelText' => 'Email',
                    'inputPlaceholder' => 'Your email as mail@example.com',
                    'typeInput' => 'email'
                ])

                @include('partials.input', [
                    'inputName' => 'subject',
                    'labelText' => 'Subject',
                    'inputPlaceholder' => 'Subject of the message...',
                    'typeInput' => 'text'
                ])


                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea
                        rows="5"
                        aria-multiline="true"
                        name="message"
                        class="textBox form-control bg-light shadow rounded
                    @error('message') is-invalid @else border-0 @enderror"
                        onfocusout="textReplace()"
                        onfocusin="textRepWithDef()"
                    >{{ old('message', 'Body message here...') }}
                </textarea>
                    @error('message')
                    <span class="invalid-feedback" role="alert">
                        <strong>
                            {{ $message }}
                        </strong>
                    </span>
                    @enderror
                </div>

                <script>
                    function textRepWithDef() {
                        let text = document.getElementsByClassName('textBox');
                        //console.log('llego');
                        text[0].childNodes[0].nodeValue = '';
                    }

                    function textReplace() {
                        let text = document.getElementsByClassName('textBox');
                        text[0].childNodes[0].nodeValue = "{{ old('message', 'Body message here...') }}";
                    }
                </script>

                <div class="form-group">
                    <button type="submit" class="form-control btn btn-primary rounded-pill shadow-sm">
                        Send
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
