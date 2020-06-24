<nav>
    <ul>
        <li class="{{ setActive('home') }}">
            <a href="{{ route('home') }}">Home</a>
        </li>
        <li  class="{{ setActive('about') }}">
            <a href="{{ route('about') }}">About me</a>
        </li>
        <li class="{{ setActive('projects.*') }}">
            <a href="{{ route('projects.index') }}">Portfolio</a>
        </li>
        <li class="{{ setActive('contact') }}">
            <a href="{{ route('contact') }}">Contact</a>
        </li>

        @auth
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <li>
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">Logout</a>
            </li>
        @else
            <li>
                <a href="{{ route('login') }}">Login</a>
            </li>
        @endauth
    </ul>
</nav>
