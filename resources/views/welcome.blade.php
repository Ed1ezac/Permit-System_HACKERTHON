@extends('layouts.landing-header')
    
@section('content')
<section class="pt-10 my-16 flex">
    <div class="sm:grid sm:grid-cols-2 gap-4 max-w-7xl mb-16">
        <div class="col col-span-1 px-8">
            <h3 class="text-headings text-5xl font-light">Apply For A Permit</h3>
            <p class="supporting-text mt-8">Apply for various permits for the Department
                of Trade and Industry such as Daycare centers, burial permit, noise and
                nuisance and many more permits. 
            </p>
            <div class="mt-8">How does it work?</div>
        </div>

        <div class="col-span-1 px-8">
            <div class="bg-white rounded shadow-md p-4">
                <form action="/proceed" type="GET">
                    @csrf
                    <div class="flex flex-col mb-3">
                        <label for="full_name" class="my-form-label">{{ __('Full Name') }}</label>
                        <input type="text" name="full_name" value="{{ old('full_name') }}" class="my-form-input 
                            @error('full_name') bg-red-200 border border-red-500 @enderror" required autocomplete="full_name">
                        @error('name')
                            <span class="mt-1 px-1 bg-red-200 text-red-500" role="alert">
                                <strong class="text-sm">{{ $message }}</strong>
                            </span>
                        @enderror                            
                    </div>
                    <div class="flex flex-col mb-3">
                        <label for="email" class="my-form-label">{{ __('Email Address') }}</label>
                        <input type="email" name="email" value="{{ old('email') }}" class="my-form-input 
                            @error('email') bg-red-200 border border-red-500 @enderror" required autocomplete="email">
                        @error('email')
                            <span class="mt-1 px-1 bg-red-200 text-red-500" role="alert">
                                <strong class="text-sm">{{ $message }}</strong>
                            </span>
                        @enderror                            
                    </div>
                    <div class="flex flex-col mb-3">
                        <label for="identity_no" class="my-form-label">{{ __('ID/Passport Number') }}</label>
                        <input type="text" name="identity_no" value="{{ old('identity_no') }}" class="my-form-input 
                            @error('identity_no') bg-red-300 border border-red-500 @enderror" required autocomplete="identity_no">
                        @error('identity_no')
                            <span class="mt-1 px-1 bg-red-200 text-red-500" role="alert">
                                <strong class="text-sm">{{ $message }}</strong>
                            </span>
                        @enderror                            
                    </div>
                    <div class="flex flex-col mb-3">
                        <label for="type" class="my-form-label">{{ __('Permit Type') }}</label>
                        <select name="permit_type" id="type">
                            <option value="0">Day Care Center</option>
                            <option value="1">Burial Permit</option>
                            <option value="2">Noise & Nuisance</option>
                            <option value="3">Music Concert</option>
                            <option value="4">Other</option>
                        </select>                             
                    </div>

                    <input type="hidden" name="step" value="1">

                    <div class="flex mt-6 mb-2 justify-end">
                        <button type="submit" class="my-button">
                            Next
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</section>

@endsection

