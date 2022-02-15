@extends('layouts.dashboard-header')

@section('features')
<section class="w-full max-w-7xl">
    <div>
        <div class="flex flex-row items-end justify-between mx-8 sm:mx-16">
            <h5 class="text-heading text-base font-medium">Import Permit Application</h5>
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
            <h5 class="heading-text">Instructions To Importers</h5>
            <p class="supporting-text mt-2">
                Lorem ipsum dolor sjka hswer 
            </p>
        </div>
        
        <div class="sm:col-span-3 px-8">
            <div class="bg-white rounded shadow-md py-4 px-6 max-w-lg">
                <form action="{{ route('import.basic.details.post') }}" method="POST">
                    @csrf
                    <div class="flex flex-col mb-3">
                        <label for="applicant_names" class="my-form-label">{{ __('Applicant Full Names') }}</label>
                        <input type="text" name="applicant_names" value="{{ $permit->applicant_names ?? old('applicant_names') }}" class="my-form-input 
                            @error('applicant_names') bg-red-200 border border-red-500 @enderror" required>
                        @error('applicant_names')
                            <span class="my-form-alert" role="alert">
                                <strong class="text-sm">{{ $message }}</strong>
                            </span>
                        @enderror                            
                    </div>
                    <div class="flex flex-col mb-3">
                        <label for="physical_address" class="my-form-label">{{ __('Physical Address') }}</label>
                        <input type="text" name="physical_address" value="{{ $permit->physical_address ?? old('physical_address') }}" class="my-form-input 
                            @error('physical_address') bg-red-200 border border-red-500 @enderror" required>
                        @error('physical_address')
                            <span class="my-form-alert" role="alert">
                                <strong class="text-sm">{{ $message }}</strong>
                            </span>
                        @enderror                            
                    </div>
                    <div class="flex flex-col mb-3">
                        <label for="postal_address" class="my-form-label">{{ __('Postal Address') }}</label>
                        <input type="text" name="postal_address" value="{{ $permit->postal_address ?? old('postal_address') }}" class="my-form-input 
                            @error('postal_address') bg-red-200 border border-red-500 @enderror" required>
                        @error('postal_address')
                            <span class="my-form-alert" role="alert">
                                <strong class="text-sm">{{ $message }}</strong>
                            </span>
                        @enderror                            
                    </div>
                    <div class="flex flex-col mb-3">
                        <label for="licence_no" class="my-form-label">{{ __('Licence Number') }}</label>
                        <input type="text" name="licence_no" value="{{ $permit->licence_no ?? old('licence_no') }}" class="my-form-input 
                            @error('licence_no') bg-red-200 border border-red-500 @enderror" required>
                        @error('licence_no')
                            <span class="my-form-alert" role="alert">
                                <strong class="text-sm">{{ $message }}</strong>
                            </span>
                        @enderror                            
                    </div>
                    <div class="flex flex-col mb-3">
                        <label for="identity_no" class="my-form-label">{{ __('ID/Passport Number') }}</label>
                        <input type="text" name="identity_no" value="{{ $permit->identity_no ?? old('identity_no') }}" class="my-form-input 
                            @error('identity_no') bg-red-300 border border-red-500 @enderror" required>
                        @error('identity_no')
                            <span class="my-form-alert" role="alert">
                                <strong class="text-sm">{{ $message }}</strong>
                            </span>
                        @enderror                            
                    </div>
                    <div class="flex flex-col mb-3">
                        <label for="permit_type" class="my-form-label">{{ __('Permit Type') }}</label>
                        <select name="permit_type" id="type">
                            <option value="Manufactured Goods">Manufactured Goods</option>
                            <option value="Bread Loaves & Pie Pastries">Bread Loaves & Pie Pastries</option>
                        </select>                             
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