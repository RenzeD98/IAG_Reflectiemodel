<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    @include('includes.head')
</head>
<body>
    <div id="app">
        
        <nav class="navbar navbar-default navbar-static-top">
            @include('includes.menu')
        </nav>

        <div id="content">
            @yield('content')
        </div>

        <footer class="row">
            @include('includes.footer')
        </footer>

    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
