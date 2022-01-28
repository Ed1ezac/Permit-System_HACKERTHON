@extends('layouts.landing-header')

@section('content')
<section class="pt-20 pb-10">
    <div class="flex justify-center">

        <div class="w-96">
            <div class="bg-white shadow rounded pt-5">
                <div class="heading-text text-center">{{ __('Register') }}</div>
                <div class="p-4">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="flex flex-col mb-3">
                            <label for="name" class="my-form-label">{{ __('Names') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" name="name" value="{{ old('name') }}"  class="my-form-input @error('name') @enderror" required autocomplete="name" autofocus/>
                                @error('name')
                                    <span class="bg-red-200 text-rose-700" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="flex flex-col mb-3">
                            <label for="email" class="my-form-label">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" name="email" value="{{ old('email') }}" class="my-form-input @error('email') bg-red-300 @enderror" required autocomplete="email">
                                @error('email')
                                    <span class="" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="flex flex-col mb-3">
                            <label for="password" class="my-form-label">{{ __('Password') }}</label>

                            <div class="">
                                <input id="password" type="password" class="my-form-input @error('password') @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="flex flex-col mb-3">
                            <label for="password-confirm" class="my-form-label">{{ __('Confirm Password') }}</label>
                            <div class="">
                                <input id="password-confirm" type="password" name="password_confirmation" class="my-form-input" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="flex flex-col mb-0">
                            <div class="p-2 text-center text-base">
                                <button type="submit" class="bg-gray-300 p-2 w-full rounded">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
