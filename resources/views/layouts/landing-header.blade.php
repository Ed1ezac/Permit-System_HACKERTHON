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

    <body class="bg-gray-100">
        <div id="app">
            <div class="flex flex-row items-center justify-between shadow bg-white h-16 px-8 mb-10">   
                <div class="">
                    <a href="/">
                        <img class="h-10 bg-gray-200 text-white rounded-full" alt="logo"/>
                    </a>
                </div>
                <div class="flex flex-row space-x-3">
                    @if(Auth::check())
                        <div>Logout</div>
                    @else
                        <a class="hover:underline hover:text-gray-500" href="/MyApplications">My Applications</a>
                        <a class="hover:underline hover:text-gray-500" href="{{route('login')}}">Admin</a>
                    @endif
                </div>
            </div>

            @yield('content')
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
        @stack('page-js')
    </body>
</html>