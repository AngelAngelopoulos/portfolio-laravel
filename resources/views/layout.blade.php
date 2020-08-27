{{ header("Strict-Transport-Security: max-age=31536000; includeSubDomains") }}
{{  header("X-Frame-Options: SAMEORIGIN") }}
{{  header("X-Content-Type-Options: nosniff") }}
{{  header("Referrer-Policy: no-referrer") }}
{{ header("Feature-Policy: microphone 'none'; geolocation 'none'") }}
{{ header("Content-Security-Policy: 'unsafe-inline'") }}

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"/>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" type="text/css" />

</head>
<body>
    <div class="d-flex flex-column h-screen justify-content-between">
        <header>
            @include('partials.nav')

            <div class="col-6 alert-success mx-auto rounded" role="alert">
                @include('partials.session-status')
            </div>


        </header>


        @auth
            <div class="container border-0 p-0 m-0">
                <span class="float-right title px-3 m-0">Welcome back <b>{{ auth()->user()->name }}!!</b></span>
            </div>
        @endauth
        <main class="main py-2">
            <div>
                @yield('content')
            </div>
        </main>

        <footer class="text-center text-dark-50 py-3 shadow-sm">
            <div class="container">
            <div class="col-sm-12 col-lg-4 float-lg-left align-content-center">
                <div class="row">
                    <a class="col-12 my-2 mx-auto text-decoration-none text-white" href="{{ route('about') }}"><i class="fas fa-address-card"></i> About me</a>

                </div>
                <div class="row">
                    <a class="col-12 my-2 mx-auto text-decoration-none text-white" href="{{ route('projects.index') }}"><i class="fas fa-tasks"></i> Portfolio</a>
                </div>

                <div class="row">
                    <a class="col-12 my-2 mx-auto text-decoration-none text-white" href="{{ route('contact') }}"><i class="far fa-envelope"></i> contacto@angelalvarado.cf</a>
                </div>
            </div>


                <div class="col-sm-12 col-lg-4 float-lg-right">
                    <div class="row">
                        <a class="col-12 my-2 mx-auto text-decoration-none text-white" href="https://www.facebook.com/profile.php?id=100007968701728"><i class="fab fa-facebook"></i> Facebook</a>

                    </div>
                    <div class="row">
                        <a class="col-12 my-2 mx-auto text-decoration-none text-white" href="https://twitter.com/suminoe_angel"><i class="fab fa-twitter"></i> Twitter</a>
                    </div>

                    <div class="row">
                        <a class="col-12 my-2 mx-auto text-decoration-none text-white" href="https://t.me/ch3rry_blossom"><i class="fab fa-telegram"></i> Telegram</a>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-4 float-lg-left">
                    <div class="row">
                        <a class="col-12 my-2 mx-auto text-decoration-none text-white" href="https://www.linkedin.com/in/luis-angel-alvarado-hernandez/"><i class="fab fa-linkedin-in"></i> Linkedin</a>

                    </div>
                    <div class="row">
                        <a class="col-12 my-2 mx-auto text-decoration-none text-white" href="https://www.behance.net/angelalvarado3"><i class="fab fa-behance"></i> Behance</a>
                    </div>

                    <div class="row">
                        <a class="col-12 my-2 mx-auto text-decoration-none text-white" href="https://www.instagram.com/sad.cherryblossom/"><i class="fab fa-instagram"></i> Instagram</a>
                    </div>
                </div>



            </div>
            <span class="text-white pt-1">
                 {{ "Angel Alvarado"  }} | Copyright &copy; {{ date('Y') }}
            </span>

        </footer>
    </div>

    <script src="https://kit.fontawesome.com/b5326cc3a7.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
