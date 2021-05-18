<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <style>
            .artisans {
                font-family: "ONE DAY", Nunito, sans-serif;
            }

            .artisans-red {
                color: #e6324d;
            }
        </style>
    </head>
    <body class="bg-gray-100 h-screen antialiased leading-none">
        <div class="min-h-screen flex flex-col items-center justify-center">
            <div>
                <h1 class="text-gray-600 text-center font-light tracking-wider text-6xl mb-6 artisans">
                    <span class="artisans-red">Artisans</span> <span>Sverige</span>
                </h1>
                <ul class="list-reset text-center">
                    <li class="inline pr-8">
                        <a href="https://events.artisans.se"
                           class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase"
                           title="Svenska Tech-events">Events
                        </a>
                    </li>
                    <li class="inline pr-8">
                        <a href="https://paste.artisans.se"
                           class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase"
                           title="Laracasts">Pastebin
                        </a>
                    </li>
                    <li class="inline pr-8">
                        <a href="https://podcast.artisans.se"
                           class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase"
                           title="News">Podden
                        </a>
                    </li>
                    <li class="inline pr-8">
                        <a href="bit.ly/artisansseslack"
                           class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase"
                           title="Nova">Slacken
                        </a>
                    </li>
                </ul>
            </div>
            <div class="mt-20">
                <p class="text-2xl pb-4">Lyssna på senaste avsnittet av  <strong class="font-bold artisans">Artisans Podden</strong>
                </p>
                <iframe src='https://share.transistor.fm/e/a06ccfce/dark' width='100%' height='180' frameborder='0' scrolling='no' seamless='true' style='width:100%; height:180px;'></iframe>
            </div>
            <div class="my-16 text-center">
                <script type='text/javascript' src='https://ko-fi.com/widgets/widget_2.js'></script>
                <script type='text/javascript'>kofiwidget2.init('Bjud oss på Ko-fi', '#e6324d', 'R6R1YY7I');
                    kofiwidget2.draw();</script>
            </div>
            <div class="mt-6 text-center">
                <p class="font-bold">Sponsorer</p>
                <p>
                    <a href="https://www.beebyte.se" style="margin-top: 20px">
                        <img src="https://cdn.beebyte.se/wp-content/uploads/2018/01/beebyte_logo_web2.png"
                             class="w-32 my-6"/>
                    </a>
                </p>
            </div>
        </div>
    </body>
</html>
