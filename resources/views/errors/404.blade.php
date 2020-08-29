
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<!-- Template Main CSS File -->

<!--<link href="https://storage.googleapis.com/segment-assets/assets/css/style.css" rel="stylesheet">-->
<link rel="stylesheet" href="{{ mix('css/app.css') }}" type="text/css" />

<!-- =======================================================
* Template Name: iPortfolio - v1.4.0
* Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
======================================================== -->
</head>

<body>

  <section id="404" class="404" style="height: 100vh">
  <div class="container py-auto">
<div class="align-items-center">
        <h2 class="" style="text-align: center"><i class="icofont-warning mx-auto"></i></h2>
      </br>
         <h1 class="mx-auto" style="text-align: center">Error: that entry does not exists, you can return to <a href="{{ route('home') }}">Home</a> </h1>
    </div>
  </div>
  </section>

  </body>

            <!-- Vendor JS Files -->
          <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
          <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
          <script src="{{ asset('assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
          <!--<script src="https://storage.googleapis.com/segment-assets/assets/vendor/php-email-form/validate.js"></script>-->

          <script src="{{ asset('assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
          <script src="{{ asset('assets/vendor/counterup/counterup.min.js') }}"></script>
          <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
          <script src="{{ asset('assets/vendor/venobox/venobox.min.js') }}"></script>
          <script src="{{ asset('assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
          <script src="{{ asset('assets/vendor/typed.js/typed.min.js') }}"></script>
          <script src="{{ asset('/assets/vendor/aos/aos.js') }}"></script>

          <!-- Template Main JS File -->
          <!--<script src="https://storage.googleapis.com/segment-assets/assets/js/main.js" defer></script>-->
          <script src="{{ mix('js/validate.js') }}" type="text/javascript" defer></script>
          <script src="{{ mix('js/app.js') }}" type="text/javascript">
          </script>
</html>
