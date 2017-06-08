<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family:'Quicksand', sans-serif;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
                width: 30em;
            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="logo">
                    <img src="{{ URL::asset('images/IAG_direct_Logo.svg') }}" alt="">
                </div>
                @if (Route::has('login'))
                    <div class="button-home">
                        @if (Auth::check())
                            <a href="{{ url('/home') }}"><button type="button" class="go-button btn">Ga naar Home</button></a>
                        @else
                            <a href="{{ url('/login') }}"><button type="button" class="go-button btn">Inloggen</button></a>
                        @endif
                    </div>
                @endif
            </div>
        </div>
    </body>
</html>
