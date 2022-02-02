@extends('layouts.landing-header')

@section('content')
    <div class="flex flex-col">
        <h5 class="ml-8 sm:ml-16 text-heading text-base">Upload Documents</h5>
        <div class="mt-2 border-t-2 border-gray-300 mx-8 sm:mx-16"></div>
    </div>

    <section class="mb-16 mt-4">
        <div class="sm:grid grid-cols-6">
            <div class='sm:col-span-3'>

            </div>

            <div Class="sm:col-span-3 px-10">
                <div class="bg-white shadow-rounded rounded mr-16  p-4">
                    <form method= post action="####">
                        @csrf
                        <div class="flex flex-col px-4  my-4 ">

                            <div class=" flex flex-col my-4">
                                <label for="certificate_of_incorporation" class="my-form-label">Certificate of Incorporation</label>
                                <input id="certificate_of_incorporation" type="text" name="certificate_of_incorporation" value="{{ old('certificate_of_incorporation') }}"  class="my-form-input @error('certificate_of_incorporation') @enderror" required autocomplete="certificate_of_incorporation" autofocus/>
                                @error('name')
                                <span class="mt-1 px-1 bg-red-200 text-red-500" role="alert">
                                    <strong class="text-sm">{{ $message }}</strong>
                                </span>
                                 @enderror 
                            </div>

                            <div class=" flex flex-col my-4">
                                <label for="tax_clearance_certificate" class="my-form-label">Tax Clearance Certificate</label>
                                <input id="tax_clearance_certificate" type="text" name="tax_clearance_certificate" value="{{ old('tax_clearance_certificate') }}"  class="my-form-input @error('tax_clearance_certificate') @enderror" required autocomplete="tax_clearance_certificate" autofocus/>
                                @error('name')
                                <span class="mt-1 px-1 bg-red-200 text-red-500" role="alert">
                                    <strong class="text-sm">{{ $message }}</strong>
                                </span>
                                 @enderror
                            </div>
                            <div class=" flex flex-col my-4">
                                <label for="Name" class="my-form-label">Certified Copy of Omang</label>
                                <input id="certified_copy_of_omang" type="text" name="certified_copy_of_omang" value="{{ old('certified_copy_of_omang') }}"  class="my-form-input @error('certified_copy_of_omang') @enderror" required autocomplete="certified_copy_of_omang" autofocus/>
                                @error('name')
                                <span class="mt-1 px-1 bg-red-200 text-red-500" role="alert">
                                    <strong class="text-sm">{{ $message }}</strong>
                                </span>
                                 @enderror
                            </div>
                            <div class=" flex flex-col my-4">
                                <label for="copy_of_trading_licence" class="my-form-label">Copy of Trading Licence</label>
                                <input id="copy_of_trading_licence" type="text" name="copy_of_trading_licence" value="{{ old('copy_of_trading_licence') }}"  class="my-form-input @error('copy_of_trading_licence') @enderror" required autocomplete="copy_of_trading_licence" autofocus/>
                                @error('name')
                                <span class="mt-1 px-1 bg-red-200 text-red-500" role="alert">
                                    <strong class="text-sm">{{ $message }}</strong>
                                </span>
                                 @enderror
                            </div>
                            <div class=" flex flex-col my-4">
                                <label for="other_necessary_documents" class="my-form-label">Other Necessary DocumentsS</label>
                                <input id="other_necessary_documents" type="text" name="other_necessary_documents" value="{{ old('other_necessary_documents') }}"  class="my-form-input @error('other_necessary_documents') @enderror" required autocomplete="other_necessary_documents" autofocus/>
                                @error('name')
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
    
@endsection