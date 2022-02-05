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

    <body class="bg-gray-100 font-body">
        <div id="app">
            <navbar
                logo-uri="{{asset('logo.svg')}}" 
                v-bind:is-admin="{{ json_encode(
                    Auth::check() ?
                    Auth::user()->hasRole('administrator')
                    : false
                )  }}"
                v-bind:is-moderator="{{ json_encode(
                    Auth::check() ?
                    Auth::user()->hasRole('moderator')
                    : false
                )  }}" 
                v-bind:is-auth="{{ json_encode(Auth::check()) }}"
            ></navbar>
            
            <div class="flex 2xl:justify-center">
                @yield('content')
            </div>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
        @stack('page-js')
    </body>
</html>