<div class="container">
        <!-- Branding Image -->
        <a class="navbar-brand" href="{{ url('/home') }}">
            <img src="{{ URL::asset('images/IAG direct liggend outline-01.svg') }}" alt="" class="header-logo">
        </a>

        <!-- Right Side Of Navbar -->
    <ul class="nav navbar-nav navbar-right">
        <!-- Authentication Links -->
        @if (Auth::guest())
        <!-- show nothing -->
        @else
        <li>
            <a class="logout-menu" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
              Uitloggen
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>
        </li>
        @endif
    </ul>

    <div class="collapse navbar-collapse">
        <!-- Left Side Of Navbar -->

        @if (Auth::guest())
        <!-- show nothing -->
        @else
        <ul class="nav navbar-nav navbar-right">
          <li><a href="/reflecties">Mijn reflectie</a></li>
          <li><a href="/feedback">Feedback geven</a></li>
          <li><a href="/profile">Profiel</a></li>
          <li><a href="/archive">Archief</a></li>
        </ul>
        @endif
    </div>
</div>
