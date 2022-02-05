@extends('layouts.dashboard-header')

@section('features')
<section class="w-full max-w-7xl">
    <div>
        <div class="flex flex-row items-end justify-between mx-8 sm:mx-16">
            <h5 class="text-heading text-base">Permit Application</h5>  
        </div>
        <div class="mt-2 border-t-2 border-gray-300 mx-8 sm:mx-16"></div>
    </div>

    <div class="md:grid md:grid-cols-5 gap-4 mb-16 mt-3 mx-8 sm:mx-16">
        <div class="hidden md:block md:col-span-2 px-8">
            <application-progress step="{{2}}"></application-progress>
        </div>
        <div class="sm:col-span-3 px-8 md:px-0">
            <div class="bg-white rounded shadow-md py-4 px-6 max-w-lg">
                <form action="{{ route('business.details.post') }}" method="POST">
                    @csrf
                    <div class=" flex flex-col mb-3">
                        <label for="business_name" class="my-form-label ">Business Names</label>
                        <input id="business_name" type="text" name="business_names" value="{{ old('business_name') }}"  class="my-form-input @error('business_name') @enderror" required autocomplete="business_name" autofocus/>
                        @error('name')
                            <span class="mt-1 px-1 bg-red-200 text-red-500" role="alert">
                            <strong class="text-sm">{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class=" flex flex-col mb-3">
                        <label for="incomporation_number" class="my-form-label">Incomporation Number</label>
                        <input id="incomporation_number" type="text" name="incomporation_number" value="{{ old('incomporation_number') }}"  class="my-form-input @error('incomporation_number') @enderror" required autocomplete="incomporation_number" autofocus/>
                        @error('identity_no')
                            <span class="mt-1 px-1 bg-red-200 text-red-500" role="alert">
                            <strong class="text-sm">{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>                    
                    <div class="flex flex-col mb-3">
                        <label for="tax_numbe" class="my-form-label">Tax Number</label>
                        <input id="tax_number" type="text" name="tax_number" value="{{ old('tax_numbe') }}"  class="my-form-input @error('tax_numbe') @enderror" required autocomplete="tax_numbe" autofocus/>
                        @error('identity_no')
                            <span class="mt-1 px-1 bg-red-200 text-red-500" role="alert">
                            <strong class="text-sm">{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>

                    <div class="flex flex-col mb-3">
                        <label for="location" class="my-form-label">Location</label>
                        <input id="location" type="text" name="location" value="{{ old('location') }}"  class="my-form-input @error('location') @enderror" required autocomplete="location" autofocus/>
                        @error('identity_no')
                            <span class="mt-1 px-1 bg-red-200 text-red-500" role="alert">
                            <strong class="text-sm">{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>

                    <div class="flex flex-col mb-3 ">
                        <label for="contact_details" class="my-form-label">Contact Details</label>
                        <input id="contact_details" type="text" name="contact_details" value="{{ old('name') }}"  class="my-form-input @error('contact_details') @enderror" required autocomplete="contact_details" autofocus/>
                        @error('identity_no')
                            <span class="mt-1 px-1 bg-red-200 text-red-500" role="alert">
                            <strong class="text-sm">{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>
            
                    <div class="flex flex-col-reverse gap-2 sm:flex-row mt-6 mb-2 sm:justify-between">
                        <a href="{{ route('business.details') }}" class="flex px-16 py-1 bg-white border border-gray-500 text-gray-700 hover:bg-gray-500 hover:text-white justify-center items-center">
                            Back 
                        </a>

                        <button type="submit" class="my-button">
                            Next
                        </button>
                    </div>
                    
                </form>
                
            </div>
        </div>
    </div>

</section>
>

@endsection