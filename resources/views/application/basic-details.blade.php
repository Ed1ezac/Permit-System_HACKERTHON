@extends('layouts.dashboard-header')

@section('features')
<section class="w-full max-w-7xl">
    <div>
        <div class="flex flex-row items-end justify-between mx-8 sm:mx-16">
            <h5 class="text-heading text-base font-medium">Permit Application</h5>
            <!---a href="#" class="my-button-small flex items-center">
                <div class="">
                    Save
                </div> 
            </!---a -->   
        </div>
        <div class="mt-2 border-t-2 border-gray-300 mx-8 sm:mx-16"></div>
    </div>
    <div class="md:grid md:grid-cols-5 gap-4 mb-16 mt-3 mx-8 sm:mx-16">

        <div class="hidden md:block sm:col-span-2 px-8">
            <application-progress step="{{1}}"></application-progress>
        </div>
        
        <div class="sm:col-span-3 px-8">
            <div class="bg-white rounded shadow-md py-4 px-6 max-w-lg">
                <form action="{{ route('basic.details.post') }}" method="POST">
                    @csrf
                    <div class="flex flex-col mb-3">
                        <label for="full_name" class="my-form-label">{{ __('Full Name') }}</label>
                        <input type="text" name="full_name" value="{{ old('full_name') }}" class="my-form-input 
                            @error('full_name') bg-red-200 border border-red-500 @enderror" required autocomplete="full_name">
                        @error('full_name')
                            <span class="my-form-alert" role="alert">
                                <strong class="text-sm">{{ $message }}</strong>
                            </span>
                        @enderror                            
                    </div>
                    <div class="flex flex-col mb-3">
                        <label for="email" class="my-form-label">{{ __('Email Address') }}</label>
                        <input type="email" name="email" value="{{ old('email') }}" class="my-form-input 
                            @error('email') bg-red-200 border border-red-500 @enderror" required autocomplete="email">
                        @error('email')
                            <span class="my-form-alert" role="alert">
                                <strong class="text-sm">{{ $message }}</strong>
                            </span>
                        @enderror                            
                    </div>
                    <div class="flex flex-col mb-3">
                        <label for="identity_no" class="my-form-label">{{ __('ID/Passport Number') }}</label>
                        <input type="text" name="identity_no" value="{{ old('identity_no') }}" class="my-form-input 
                            @error('identity_no') bg-red-300 border border-red-500 @enderror" required autocomplete="identity_no">
                        @error('identity_no')
                            <span class="my-form-alert" role="alert">
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