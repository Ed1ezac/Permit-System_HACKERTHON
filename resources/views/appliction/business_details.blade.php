@extends('layouts.landing-header')

@section('content')

<div class="flex flex-col">
    <h5 class="ml-8 sm:ml-16 text-heading text-base">Business Details</h5>
    <div class="mt-2 border-t-2 border-gray-300 mx-8 sm:mx-16"></div>
</div>
<section class="my-16 ">

    <div class="sm:grid grid-cols-6 ">
        <div class="sm:col-span-3 px-8">
            <application-progress step="{{1}}"></application-progress>
        </div>
        <div class="sm:col-span-3 px-10">
            <div class="bg-white shadow rounded mr-16 p-4 ">
                <form method="get" action="####">
                    @csrf
                    <div class="flex flex-col px-4  my-4">
                        
                        <div class=" flex flex-col my-4">
                            <label for="business_name" class="my-form-label ">Business Names</label>
                            <input id="business_name" type="text" name="business_names" value="{{ old('business_name') }}"  class="my-form-input @error('business_name') @enderror" required autocomplete="business_name" autofocus/>
                            @error('name')
                                <span class="mt-1 px-1 bg-red-200 text-red-500" role="alert">
                                <strong class="text-sm">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class=" flex flex-col my-4">
                            <label for="incomporation_number" class="my-form-label">Incomporation Number</label>
                            <input id="incomporation_number" type="text" name="incomporation_number" value="{{ old('incomporation_number') }}"  class="my-form-input @error('incomporation_number') @enderror" required autocomplete="incomporation_number" autofocus/>
                            @error('identity_no')
                                <span class="mt-1 px-1 bg-red-200 text-red-500" role="alert">
                                <strong class="text-sm">{{ $message }}</strong>
                                </span>
                             @enderror
                        </div>
                        
                        
                        <div class=" flex flex-col my-4">
                            <label for="tax_numbe" class="my-form-label">Tax Number</label>
                            <input id="tax_number" type="text" name="tax_number" value="{{ old('tax_numbe') }}"  class="my-form-input @error('tax_numbe') @enderror" required autocomplete="tax_numbe" autofocus/>
                            @error('identity_no')
                                <span class="mt-1 px-1 bg-red-200 text-red-500" role="alert">
                                <strong class="text-sm">{{ $message }}</strong>
                                </span>
                             @enderror
                        </div>

                        <div class=" flex flex-col my-4">
                            <label for="location" class="my-form-label">Location</label>
                            <input id="location" type="text" name="location" value="{{ old('location') }}"  class="my-form-input @error('location') @enderror" required autocomplete="location" autofocus/>
                            @error('identity_no')
                                <span class="mt-1 px-1 bg-red-200 text-red-500" role="alert">
                                <strong class="text-sm">{{ $message }}</strong>
                                </span>
                             @enderror
                        </div>

                        <div class=" flex flex-col my-4 ">
                            <label for="contact_details" class="my-form-label">Contact Details</label>
                            <input id="contact_details" type="text" name="contact_details" value="{{ old('name') }}"  class="my-form-input @error('contact_details') @enderror" required autocomplete="contact_details" autofocus/>
                            @error('identity_no')
                                <span class="mt-1 px-1 bg-red-200 text-red-500" role="alert">
                                <strong class="text-sm">{{ $message }}</strong>
                                </span>
                             @enderror
                        </div>
                        
                        <input type="hidden" name="step" value="1">

                        <div class="flex mt-6 mb-2 justify-end">
                            <button type="submit" class="my-button">
                             Next
                            </button>
                        </div>


                    </div>
                </form>
                
            </div>
        </div>
    </div>

</section>
>

@endsection