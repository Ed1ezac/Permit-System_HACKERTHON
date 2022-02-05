@extends('layouts.landing-header')

@section('content')
<div class="pt-20 pb-10 w-full">
    <div class="flex flex-row justify-center mt-6 xl:mt-16">
        <div class="bg-white shadow rounded w-96 mx-8">
            <div class="text-heading text-center mt-4">{{ __('Sign in') }}</div>
            <div class="p-4">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="flex flex-col mb-3">
                        <label for="email" class="my-form-label">{{ __('Email Address') }}</label>
                        <input type="email" class="my-form-input @error('email') bg-red-200 border border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                            <span class="my-form-alert" role="alert">
                                <strong class="text-sm">{{ $message }}</strong>
                            </span>
                        @enderror                            
                    </div>
                    <div class="flex flex-col mb-3">
                        <label for="password" class="my-form-label">{{ __('Password') }}</label>
                        <input id="password" type="password" class="my-form-input @error('password') bg-red-200 border border-red-500 @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="my-form-alert" role="alert">
                                <strong class="text-sm">{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="flex mb-3">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="text-gray-500" type="checkbox" name="remember" id="remember">
                                <label class="my-form-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col mt-8 items-center mb-0">
                        <button type="submit" class="my-button">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="p-3 mt-2" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>   
</div>
@endsection
