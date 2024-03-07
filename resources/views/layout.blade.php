<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="{{ $metaData['appAuthor'] }}">
        <meta name="description" content="{{ $metaData['pageDescription'] }}">
        <meta name="keywords" content="{{ $metaData['pageKeywords'] }}">
        <meta name="robots" content="index, follow">

        <meta property="og:title" content="{{ $metaData['pageTitle'] }}">
        <meta property="og:description" content="{{ $metaData['pageDescription'] }}">
        <meta property="og:image" content="{{ asset('images/favicon.png') }}">

        <meta name="twitter:title" content="{{ $metaData['pageTitle'] }}">
        <meta name="twitter:description" content="{{ $metaData['pageDescription'] }}">

        <title>{{ $metaData['pageTitle'] }}</title>

        <!-- Fonts -->

        <!-- Styles -->
        <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">
        <link rel="canonical" href="{{ url('/') }}">
        <link href="{{ asset('css/index.css') }}" rel="stylesheet">
        <link href="{{ asset('css/category.css') }}" rel="stylesheet">
        <link href="{{ asset('css/intro-and-job-search.css') }}" rel="stylesheet">
        <link href="{{ asset('css/job-listing-container.css') }}" rel="stylesheet">

        <!-- Scripts -->
        <script src="{{ asset('js/index.js') }}" defer></script>

        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/5e709ce220.js" crossorigin="anonymous"></script>

    </head>
    <body>
        <div class="theme">
            @include('partials.header')
            <main>
                @yield('content')
            </main>
            @include('partials.footer')
        </div>
    </body>
</html>
