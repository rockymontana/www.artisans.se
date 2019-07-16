<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="https://cdn.simplecast.com/images/0acb55cf-7c6b-4bc5-8696-0205845e370e/235d06bc-ff96-44a9-82d1-a00cc0e34f67/favicon.jpg" />
    <title>Artisans Sverige</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .artisans {
            color: #e6324d;
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
            display: flex;
            flex-direction: column;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
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
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                <span class="artisans">Artisans</span> <span>Sverige</span>
            </div>
            <div class="links">
                <!-- a href="https://laravel.com/docs">Laravels Docs</a -->
                <a href="https://events.artisans.se">Events</a>
                <a href="https://paste.artisans.se">Pastebin</a>
                <a href="https://podcast.artisans.se">Podcast</a>
                <a href="http://bit.ly/laravelseslack">Slack</a>
                <!-- a href="https://www.facebook.com/groups/laravel.se">Laravel Sverige (Facebook)</a -->
            </div>
            <div class="links" style="margin-top: 80px; display: flex; align-items: center; justify-content: center; flex-direction: column">
                <span style="font-weight: bold">Sponsorer:</span>
                <a href="https://www.beebyte.se" style="margin-top: 20px">
                    <img src="https://cdn.beebyte.se/wp-content/uploads/2018/01/beebyte_logo_web2.png" height="30px" />
                </a>
            </div>
        </div>

    </div>
</body>

</html>