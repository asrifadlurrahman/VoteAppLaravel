<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>VOTING APP</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- materialize css-->
        <link rel="stylesheet" href="/css/materialize.min.css">


        <!-- Styles -->
        <style>
            html, body {
                background-color: #EBEBEB;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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
            }

            .title {
                font-size: 30px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
{{--            @if (Route::has('login'))--}}
{{--                <div class="top-right links">--}}
{{--                    @auth--}}
{{--                        <a href="{{ url('/home') }}">Home</a>--}}
{{--                    @else--}}
{{--                        <a href="{{ route('login') }}">Login</a>--}}

{{--                        @if (Route::has('register'))--}}
{{--                            <a href="{{ route('register') }}">Register</a>--}}
{{--                        @endif--}}
{{--                    @endauth--}}
{{--                </div>--}}
{{--            @endif--}}
            
            <div class="content">
                <div class="title m-b-md">
                    <img src="{{asset('images/vote.png')}}" style="width: 100px; height: 100px;">
                    <br>
                    .: Selamat Datang di Website Voting :.
                </div>

            <div class = position-ref>
                @if (Route::has('login'))
                    @auth
                        <a></a>
                    @else
                        <a class="waves-effect waves-light btn-large" href="{{route('login')}}">LOGIN</a>
                        @if(Route::has('register'))
                            <a class="waves-effect waves-light btn-large" href="{{route('register')}}">REGISTER</a>
                        @endif
                    @endauth

                 @endif
            </div>
            </div>
        </div>
    </body>
</html>
