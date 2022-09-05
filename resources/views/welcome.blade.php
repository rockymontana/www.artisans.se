<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Twitter -->
    <meta name="twitter:site" content="@ArtisansSe">
    <meta name="twitter:title" content="Artisans Sverige">
    <meta name="twitter:description" content="Swedish Laravel community, expanding beyond to more artisans.">

    <!-- Facebook -->
    <meta property="og:url" content="https://artisans.se/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Artisans Sverige">
    <meta property="og:description" content="Swedish Laravel community, expanding beyond to more artisans.">
    <meta property="og:title" content="Artisans Sverige">

    <meta name="description" content="Swedish Laravel community, expanding beyond to more artisans.">
    <meta name="keywords" content="technology, web, development, laravel, vuejs, javascript, html, css, react, web-develoment, solution-architect, technologist, webb, utveckling">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    @vite('resources/css/app.css')

</head>
<body class="flex flex-col items-center justify-center h-screen min-h-screen antialiased leading-none bg-gray-100">
    <header>
        <h1 class="mb-6 text-6xl font-light tracking-wider text-center text-gray-600 font-artisan">
            <span class="text-artisan">Artisans</span> Sverige
        </h1>
        <nav class="flex justify-center space-x-8 text-sm font-normal text-teal-800 no-underline uppercase [&>a:hover]:underline" aria-label="Site">
            <a href="https://events.artisans.se" title="Svenska Tech-events">
                Events
            </a>
            <a href="https://paste.artisans.se" title="Pastebin">
                Pastebin
            </a>
            <a href="https://podcast.artisans.se" title="Podcast">
                Podden
            </a>
            <a href="https://bit.ly/artisansseslack" title="Slack">
                Slacken
            </a>
        </nav>
    </header>
    <main class="mt-20">
        <p class="pb-4 text-2xl">
            Lyssna på senaste avsnittet av <strong class="font-bold font-artisan">Artisans Podden</strong>
        </p>
        <iframe class="w-full h-[180px]" height="180" src="https://share.transistor.fm/e/a06ccfce/dark" frameborder="0" scrolling="no" seamless="true" title="Latest episode of the Artisans Podden"></iframe>
    </main>
    <aside class="my-16 text-center">
        <script src="https://ko-fi.com/widgets/widget_2.js"></script>
        <script>
            kofiwidget2.init("Bjud oss på Ko-fi", "#e6324d", "R6R1YY7I");
            kofiwidget2.draw();
        </script>
    </aside>
    <footer class="mt-6 text-center">
        <h2 class="font-bold">
            Sponsorer
        </h2>
        <ul class="mt-5">
            <li>
                <a href="https://www.beebyte.se">
                    <img src="{{ asset('images/sponsors/beebyte.png') }}" alt="beebyte logotype" class="w-32 my-6" />
                </a>
            </li>
        </ul>
    </footer>
</body>
</html>
