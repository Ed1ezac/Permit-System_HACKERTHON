@extends('layouts.landing-header')

@section('content')

<section class=" my-16 flex ">
    <div class="sm:grid grid-cols-6">

        <div class="sm:col-span-3">

            <div class="sm:col-span-3">
                <h3 class="text-headings text-5xl font-light">Request Your Permit status</h3>
                <p class="supporting-text mt-8">View your Permits status by filling in the form . 
                </p>

            </div>

        </div>
        <div class="sm:col-span-3 justify-between">
            <div class="bg-white shadow rounded mr-16 p-4">
                @csrf
                <form action="post" action="####">

                    <div class="flex flex-col px-4  my-4">
                        <label for="Name" class="my-form-label">Full Name</label>
                        <input id="name" type="text" name="name" value="{{ old('name') }}"  class="my-form-input @error('name') @enderror" required autocomplete="name" autofocus/>
                        @error('name')
                            <span class="mt-1 px-1 bg-red-200 text-red-500" role="alert">
                            <strong class="text-sm">{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>

                    <div class="flex flex-col px-4  my-4">
                        <label for="email" class="my-form-label">{{ __('Email Address') }}</label>
                        <input type="email" name="email" value="{{ old('email') }}" class="my-form-input 
                            @error('email') bg-red-200 border border-red-500 @enderror" required autocomplete="email">
                        @error('email')
                            <span class="mt-1 px-1 bg-red-200 text-red-500" role="alert">
                            <strong class="text-sm">{{ $message }}</strong>
                            </span>
                        @enderror
                    
                    </div>

                    <div class="flex flex-col px-4  my-4">

                        <label for="identity_no" class="my-form-label">{{ __('ID/Passport Number') }}</label>
                        <input type="text" name="identity_no" value="{{ old('identity_no') }}" class="my-form-input 
                        @error('identity_no') bg-red-300 border border-red-500 @enderror" required autocomplete="identity_no">
                        @error('identity_no')
                            <span class="mt-1 px-1 bg-red-200 text-red-500" role="alert">
                            <strong class="text-sm">{{ $message }}</strong>
                            </span>
                        @enderror 

                    </div>

                        <input type="hidden" name="step" value="1">

                        <div class="flex mt-6 mb-2 justify-end">
                            <button type="submit" class="my-button">
                                Submit
                            </button>
                        </div>
                    

                </form>

            </div>

        </div>
    </div>
</section>

@endsection