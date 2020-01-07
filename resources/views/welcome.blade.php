<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #3030FF;
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
                right: 500px;
                top: 200px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
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
        <div class=out1 style='text-align:center; line-height:100px'>
            <span>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth

                        <a href="{{ url('/home') }}">訂票</a>
                        <div class="content">

                            <div class="title m-b-md">
                                會員專區
                            </div>

                            <div class="links">

                                <a href="{{ route('movie') }}">上映電影</a>
                                <a href="{{ url('cheaper') }}">優惠資訊</a>
                            </div>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                        <div class="content">

                            <div class="title m-b-md">
                                電影訂票系統
                            </div>

                            <div class="links">

                                <a href="{{ route('movie') }}">上映電影</a>
                                <a href="{{ url('QA') }}">常見問題</a>
                            </div>
                    @endauth

                </div>
            @endif
            </span>
            </div>
        </div>
    </body>
</html>
