<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @yield('extra-css', '')
</head>
<body>
    <div id="app">
        @yield('content')
    </div>
    {{--  Footer  --}}
    <footer class="bg-bgfooter text-light text-lg font-light py-10">
        <div class="w-3/5 mx-auto flex justify-between">
            <div class="footer-left">
                Made by Denis Kotlyarchuk
            </div>
            <div class="footer-right">Follow me:</div>
        </div>
    </footer>

    @yield('scripts', '')
</body>
</html>
