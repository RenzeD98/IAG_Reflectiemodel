<div class="container">
    <div class="row">
         <div class="col-xs-4">

         </div>
        <div class="col-xs-4">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
         </div>
        <div class="col-xs-4">
        </div>
    </div>
    <div class="collapse navbar-collapse" id="app-navbar-collapse">
        <!-- Left Side Of Navbar -->
        <ul class="nav navbar-nav">
            &nbsp;
        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="nav navbar-nav navbar-right">
            <!-- Authentication Links -->
            @if (Auth::guest())
                <li><a href="{{ route('login') }}">Inloggen</a></li>
                <li><a href="{{ route('register') }}">Registreren</a></li>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->firstname }} {{ Auth::user()->lastname }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">

                    	<li><a href="{{ url('feedback') }}">Feedback</a></li>
                    	<li><a href="{{ url('spraak') }}">Spraak</a></li>
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Uitloggen
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            @endif
        </ul>
    </div>
</div>
