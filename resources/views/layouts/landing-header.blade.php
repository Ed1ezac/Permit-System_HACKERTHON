<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ config('app.name', 'Permits') }}</title>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">  
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @stack('page-css')
    </head>


    <body class="bg-gray-50">
        <div id="app">
            @yield('content')
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
        @stack('page-js')
    </body>
</html>