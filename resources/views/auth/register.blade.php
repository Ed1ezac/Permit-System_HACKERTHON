@extends('layouts.landing-header')

@section('content')
<section class="w-full pt-20 pb-10">
    <div class="flex flex-row justify-center">
        <div class="bg-white shadow rounded mx-8 w-96 mt-6 xl:mt-16">
            <div class="heading-text text-center mt-4">{{ __('Register') }}</div>
            <div class="p-4">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="flex flex-col mb-3">
                        <label for="name" class="my-form-label">{{ __('Names') }}</label>
                        <input id="name" type="text" name="name" value="{{ old('name') }}"  class="my-form-input @error('name') @enderror" required autocomplete="name" autofocus/>
                        @error('name')
                            <span class="my-form-alert" role="alert">
                                <strong class="text-sm">{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="flex flex-col mb-3">
                        <label for="email" class="my-form-label">{{ __('Email Address') }}</label>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" class="my-form-input @error('email') bg-red-300 @enderror" required autocomplete="email">
                        @error('email')
                            <span class="my-form-alert" role="alert">
                                <strong class="text-sm">{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="flex flex-col mb-3">
                        <label for="password" class="my-form-label">{{ __('Password') }}</label>
                        <input id="password" type="password" class="my-form-input @error('password') @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                            <span class="my-form-alert" role="alert">
                                <strong class="text-sm">{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="flex flex-col mb-3">
                        <label for="password-confirm" class="my-form-label">{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" name="password_confirmation" class="my-form-input" required autocomplete="new-password">
                    </div>

                    <div class="flex flex-col mb-0">
                        <div class="p-2 text-center text-base">
                            <button type="submit" class="my-button">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
