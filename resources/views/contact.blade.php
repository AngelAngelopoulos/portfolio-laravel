@extends('layout')

@section('title', 'Contact')

@section('content')
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p>You can contact me to the following data, I will not delay in answering although I recommend you to do it by Telegram or Mail (not calls), there I usually answer faster.</p>
      </div>
      <div class="row" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>San Luis Potosi, Mexico</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>contacto@angelalvarado.cf</p>
              </div>

              <div class="phone">
                <i class="icofont-telegram"></i>
                <h4>Telegram:</h4>
                <p><a href="https://t.me/ch3rry_blossom">t.me/ch3rry_blossom</a></p>
              </div>

<div style="width: 100%">
  <iframe width="100%" height="290px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=es&amp;q=22.152113556502893,%20-100.97534179687501+(Mi%20ubicacion)&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
</div>

            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form method="post" action="{{ route('contact') }}"
                  class=" text-white shadow rounded php-email-form py-3 px-4" style="width: 100%"
                  id="email-form">
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

                <div class="g-recaptcha" data-sitekey="6LfHuMQZAAAAADpG3XBuCVcyjiBomHxPq3wfSc18"></div>
                <div class="mb-3">
                                <div class="loading">Sending</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div>

                <div class="form-group">
                    <button type="submit" class="form-control btn btn-primary rounded-pill shadow-sm mt-4">
                        Send
                    </button>
                </div>
            </form>
          </div>
          </div>
        </div>
    </section>
@endsection
