<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    @include('includes.head')
</head>
<body>
    <div id="app">

        <div id="header">
            <nav class="navbar navbar-default navbar-static-top">
                @include('includes.header')
            </nav>
        </div>

        <div id="content">
            @yield('content')
        </div>

        <div id="mobile-menu">
            @include('includes.mobilemenu')
        </div>

    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
