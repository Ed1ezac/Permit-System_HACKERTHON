@extends('layouts.landing-header')

@section('content')
<div class="pt-20">

<div class="flex justify-center">
    <div class="flex flex-col items-center justify-center">

        <div class="bg-white w-96 shadow rounded">
            <div class="heading-text m-4 text-center">{{ __('Login') }}</div>

            <div class="m-4">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="flex flex-col mb-3">
                        <label for="email" class="my-form-label">{{ __('Email Address') }}</label>
                        <input type="email" name="email" value="{{ old('email') }}" class="my-form-input 
                            @error('email') bg-red-300 @enderror" required autocomplete="email">
                        @error('email')
                            <span class="bg-red-200 text-red-800" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror                            
                    </div>

                    <div class="flex flex-col mb-3">
                        <label for="password" class="my-form-label">{{ __('Password') }}</label>
                        <input id="password" type="password" name="password" class="my-form-input 
                            @error('password') bg-red-300 @enderror" required autocomplete="current-password">
                        @error('password')
                            <span class="bg-red-200 text-red-800" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="w-full flex justify-between mb-4">
                        <div class="">
                            <input class="text-gray-600" type="checkbox" name="remember" id="remember">
                            <label class="my-form-label text-sm" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                        
                        <div>
                            <a class="text-sm text-blue-600" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        </div>
                    </div>

                    <div class="flex flex-col mb-0">
                        <button type="submit" class="p-2 bg-gray-300 text-base rounded">
                            {{ __('Login') }}
                        </button>
                    </div>

                </form>
            </div>
        </div>

        <div class="block mt-8 mb-16">
            <a class="bg-gray p-1 px-8 hover:underline hover:text-gray-500" href="{{ route('register')}}">Register</a>
        </div>
    </div>

</div>

    
</div>
@endsection
