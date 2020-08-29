<!-- ======= Header ======= -->
<header id="header">
  <div class="d-flex flex-column">

    <div class="profile">
      <img src="{{ asset('img/profile.jpg') }}" alt="" class="img-fluid rounded-circle">
      <h1 class="text-light mx-auto"><a href="index.html">Angel Alvarado</a></h1>
      <div class="social-links mt-3 text-center">
        <a href="https://twitter.com/suminoe_angel" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="https://www.facebook.com/profile.php?id=100007968701728" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/sad.cherryblossom/" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://www.behance.net/angelalvarado3" class="google-plus"><i class="bx bxl-behance"></i></a>
        <a href="https://www.linkedin.com/in/luis-angel-alvarado-hernandez" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        <a href="https://github.com/AngelAngelopoulos" class="twitter"><i class="bx bxl-github"></i></a>
      </div>
    </div>

    <nav class="nav-menu nav navbar-nav">
      <ul>
        @auth
          <li>
            <span class="text-white-50 px-3 title m-0"> Welcome back <b>{{ auth()->user()->name }}!!</b></span>
          </li>
        @endauth
        <li><a class="nav-link {{ setActive('home') }} px-3 " href="{{ route('home') }}"><i class="bx bx-home"></i> <span>Home</span></a></li>
        <li><a class="nav-link {{ setActive('about') }} px-3" href="{{ route('about') }}"><i class="bx bx-user"></i> <span>About</span></a></li>
        <li><a a class="nav-link {{ setActive('projects.*') }} px-3 " href="{{ route('projects.index') }}"><i class="bx bx-book-content"></i> Portfolio</a></li>
        <li><a class="nav-link {{ setActive('services') }} px-3" href="{{ route('services') }}"><i class="bx bx-server"></i> Services</a></li>
        <li><a class="nav-link {{ setActive('contact') }} px-3 " href="{{ route('contact') }}"><i class="bx bx-envelope"></i> Contact</a></li>
        @auth
                <form class="m-0 p-0" id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <li >
                    <a class="nav-link px-3" href="{{ route('logout') }} "
                       onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();"><i class="bx bx-log-out"></i><span>Logout</span></a>
                </li>

        @else
          <li class="nav-item">
                    <a class="nav-link px-3" href="{{ route('login') }} "><i class="bx bx-log-in"></i><span>Login</span></a>
                </li>
        @endauth
      </ul>
    </nav>
    <!-- .nav-menu -->

  </div>

</header><!-- End Header -->

<button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>
