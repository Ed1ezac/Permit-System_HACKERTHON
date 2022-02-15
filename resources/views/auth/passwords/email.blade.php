@extends('layouts.landing-header')

@section('content')
<div class="pt-20 pb-10 w-full">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="flex flex-row justify-center mt-6 xl:mt-16">
        <div class="bg-white shadow rounded w-96 mx-8">
            <div class="text-heading text-center mt-4">{{ __('Reset Password') }}</div>

                <div class="p-4">
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="flex flex-col mb-3">
                            <label for="email" class="my-form-label">{{ __('Email Address') }}</label>
                            <input id="email" type="email" class="my-form-input @error('email') bg-red-200 border border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="my-form-alert" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="flex justify-center">
                            <button type="submit" class="my-button">
                                {{ __('Send Password Reset Link') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
