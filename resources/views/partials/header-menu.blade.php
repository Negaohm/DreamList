<!-- Authentication Links -->
<div class="header-menu">
@if (Auth::guest())
    <a class="navbar-text navbar-right connection" href="{{ url('/login') }}">Connexion</a>
    <a class="navbar-text navbar-right register" href="{{ url('/register') }}">Inscription</a>
@else
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>

        <ul class="dropdown-menu" role="menu">
            <li>
                <a href="{{ url('/logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
    </li>
@endif
</div>
