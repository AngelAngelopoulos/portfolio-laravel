<div id="app"></div>
<nav id="navigation" class="navbar navbar-dark nav-tabs navbar-expand-lg py-3 border-0">
        <a href="{{ route('home') }}" class="navbar-brand col-6 text-white">
            {{ "Angel Alvarado" /*config('app.name')*/ }}
        </a>
        <button class="navbar-toggler" type="button"
                data-toggle="collapse"
                data-target="#navbar"
                aria-controls="navbar"
                aria-expanded="false"
                aria-label="Toggle Navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse py-2" id="navbar">
            <ul class="nav navbar-nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link {{ setActive('home') }} px-3 " href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a>
                </li>
                <li  class="nav-item">
                    <a class="nav-link {{ setActive('about') }} px-3" href="{{ route('about') }}"><i class="fas fa-address-card"></i> About me</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ setActive('projects.*') }} px-3 " href="{{ route('projects.index') }}"><i class="fas fa-tasks"></i> Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ setActive('contact') }} px-3 " href="{{ route('contact') }}"><i class="fas fa-paper-plane"></i> Contact</a>
                </li>

            @auth
                <form class="m-0 p-0" id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <li class="nav-item">
                    <a class="nav-link px-3" href="{{ route('logout') }} "
                       onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();"><i class="fas fa-window-close"></i> Logout</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link px-3" href="{{ route('login') }} "><i class="fas fa-user-lock"></i> Login</a>
                </li>
            @endauth
            </ul>
        </div>
 </nav>


