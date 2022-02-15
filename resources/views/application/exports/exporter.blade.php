@extends('layouts.dashboard-header')

@section('features')
<section class="w-full max-w-7xl">
    <div>
        <div class="flex flex-row items-end justify-between mx-8 sm:mx-16">
            <h5 class="text-heading text-base font-medium">Exporter Registration</h5>
        </div>
        <div class="mt-2 border-t-2 border-gray-300 mx-8 sm:mx-16"></div>
    </div>

    <div class="md:grid md:grid-cols-5 gap-4 mt-3 mx-8 sm:mx-16">
        <div class="hidden md:block sm:col-span-2 px-8">
            <h5>Basic Info</h5>
            <p class="supporting-text">
                Personal details of business owner/ director.
            </p>
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
                        <label for="postal_address" class="my-form-label">{{ __('Postal Address') }}</label>
                        <input type="text" name="postal_address" value="{{ old('identity_no') }}" class="my-form-input 
                            @error('postal_address') bg-red-300 border border-red-500 @enderror" required>
                        @error('postal_address')
                            <span class="my-form-alert" role="alert">
                                <strong class="text-sm">{{ $message }}</strong>
                            </span>
                        @enderror                            
                    </div>

                </form>
            </div>

        </div>
    </div>

    <div class="my-6 border-t border-gray-300 mx-8 sm:mx-16"></div>
    
    <div class="md:grid md:grid-cols-5 gap-4 mb-16 mx-8 sm:mx-16">
        <div class="hidden md:block sm:col-span-2 px-8">
            <h5>Business Information</h5>
            <p class="supporting-text">
                Details of registering business.
            </p>
        </div>

        <div class="sm:col-span-3 px-8">
            <div class="bg-white rounded shadow-md py-4 px-6 max-w-lg">
                <form action="{{ route('basic.details.post') }}" method="POST">
                    @csrf
                    <div class="flex flex-col mb-3">
                        <label for="full_name" class="my-form-label">{{ __('Business Name') }}</label>
                        <input type="text" name="full_name" value="{{ old('full_name') }}" class="my-form-input 
                            @error('full_name') bg-red-200 border border-red-500 @enderror" required autocomplete="full_name">
                        @error('full_name')
                            <span class="my-form-alert" role="alert">
                                <strong class="text-sm">{{ $message }}</strong>
                            </span>
                        @enderror                            
                    </div>
                    <div class="flex flex-col mb-3">
                        <label for="identity_no" class="my-form-label">{{ __('Salvage Yard License Number') }}</label>
                        <input type="text" name="identity_no" value="{{ old('identity_no') }}" class="my-form-input 
                            @error('identity_no') bg-red-300 border border-red-500 @enderror" required autocomplete="identity_no">
                        @error('identity_no')
                            <span class="my-form-alert" role="alert">
                                <strong class="text-sm">{{ $message }}</strong>
                            </span>
                        @enderror                            
                    </div>
                    
                    <div class="flex flex-col mb-3">
                        <label for="postal_address" class="my-form-label">{{ __('Location of Salvage Yard') }}</label>
                        <input type="text" name="postal_address" value="{{ old('identity_no') }}" class="my-form-input 
                            @error('postal_address') bg-red-300 border border-red-500 @enderror" required>
                        @error('postal_address')
                            <span class="my-form-alert" role="alert">
                                <strong class="text-sm">{{ $message }}</strong>
                            </span>
                        @enderror                            
                    </div>

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