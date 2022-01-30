@extends('layouts.landing-header')

@section('content')
<div class="pt-20">

<div class="flex justify-center">
    <div class="flex flex-col items-center justify-center">

                <div class="m-4 ">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="flex mb-3">
                            <label for="email" class="text-gray-600 font-semibold">{{ __('Email Address') }}</label>
                                <input type="email" class="rounded @error('email') @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="bg-red-200 text-red-800" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                            
                        </div>

                        <div class="flex mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            
                            <input id="password" type="password" class="rounded @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="bg-red-200 text-red-800" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="flex mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember">

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="flex mb-0">
                            <button type="submit" class="p-3 bg-gray-300 text-base rounded">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="p-3" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>

                    </form>
                </div>
            </div>
        </div>
<<<<<<< HEAD

        <div class="block mt-8 mb-16">
            <a class="bg-gray p-1 px-8 hover:underline hover:text-gray-500" href="{{ route('register')}}">Register</a>
        </div>
=======
>>>>>>> bd2fce3ee7e8e0a705dcecefa3697957e2ffc3a2
    </div>

</div>

    
</div>
@endsection
