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
                <application-progress step="{{3}}"></application-progress>
            </div>

            <div Class="sm:col-span-3 px-8 md:px-0">
                <div class="bg-white rounded shadow-md py-4 px-6 max-w-lg">
                    <form action="{{route('upload.documents.post')}}" method="POST">
                        @csrf
                        <div class=" flex flex-col mb-3">
                            <label for="certificate_of_incorporation" class="my-form-label">Certificate of Incorporation</label>
                            <input id="certificate_of_incorporation" type="text" name="certificate_of_incorporation" value="{{ old('certificate_of_incorporation') }}"  class="my-form-input @error('certificate_of_incorporation') @enderror" required autocomplete="certificate_of_incorporation" autofocus/>
                            @error('name')
                            <span class="mt-1 px-1 bg-red-200 text-red-500" role="alert">
                                <strong class="text-sm">{{ $message }}</strong>
                            </span>
                            @enderror 
                        </div>

                        <div class="flex flex-col mb-3">
                            <label for="tax_clearance_certificate" class="my-form-label">Tax Clearance Certificate</label>
                            <input id="tax_clearance_certificate" type="text" name="tax_clearance_certificate" value="{{ old('tax_clearance_certificate') }}"  class="my-form-input @error('tax_clearance_certificate') @enderror" required autocomplete="tax_clearance_certificate" autofocus/>
                            @error('name')
                            <span class="mt-1 px-1 bg-red-200 text-red-500" role="alert">
                                <strong class="text-sm">{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                            <div class="flex flex-col mb-3">
                                <label for="Name" class="my-form-label">Certified Copy of Omang</label>
                                <input id="certified_copy_of_omang" type="text" name="certified_copy_of_omang" value="{{ old('certified_copy_of_omang') }}"  class="my-form-input @error('certified_copy_of_omang') @enderror" required autocomplete="certified_copy_of_omang" autofocus/>
                                @error('name')
                                <span class="mt-1 px-1 bg-red-200 text-red-500" role="alert">
                                    <strong class="text-sm">{{ $message }}</strong>
                                </span>
                                 @enderror
                            </div>
                            <div class="flex flex-col mb-3">
                                <label for="copy_of_trading_licence" class="my-form-label">Copy of Trading Licence</label>
                                <input id="copy_of_trading_licence" type="text" name="copy_of_trading_licence" value="{{ old('copy_of_trading_licence') }}"  class="my-form-input @error('copy_of_trading_licence') @enderror" required autocomplete="copy_of_trading_licence" autofocus/>
                                @error('name')
                                <span class="mt-1 px-1 bg-red-200 text-red-500" role="alert">
                                    <strong class="text-sm">{{ $message }}</strong>
                                </span>
                                 @enderror
                            </div>
                            <div class="flex flex-col mb-3">
                                <label for="other_necessary_documents" class="my-form-label">Other Necessary Documents</label>
                                <input id="other_necessary_documents" type="text" name="other_necessary_documents" value="{{ old('other_necessary_documents') }}"  class="my-form-input @error('other_necessary_documents') @enderror" required autocomplete="other_necessary_documents" autofocus/>
                                @error('name')
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

                         </div>

                    </form>
                </div>

            </div>

        </div>
    </section>
    
@endsection