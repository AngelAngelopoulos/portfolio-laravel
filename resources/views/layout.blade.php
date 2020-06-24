
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <style>
        .active a {
            color: #ff0000;
            text-decoration: none;
        }
    </style>
</head>
<body>
    @include('partials.nav')




    @auth
        {{ auth()->user()->name }}
    @endauth

    @include('partials.session-status')
    <div>
        @yield('content')
    </div>




</body>
</html>
