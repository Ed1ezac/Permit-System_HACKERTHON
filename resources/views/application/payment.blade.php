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
                <application-progress step="4"></application-progress>
            </div>

            <div class="sm:col-span-3 px-8 md:px-0">
                <div class="bg-white rounded shadow-md py-4 px-6 max-w-lg">
                    <form action="###" method="POST">
                        <div class="flex flex-col mb-3">
                            <label for="Name" class="my-form-label">Full Name</label>
                            <input id="name" type="text" name="name" value="{{ old('name') }}"  class="my-form-input @error('name') @enderror" required autocomplete="name" autofocus/>
                        </div>
                        <div class="flex flex-col mb-3">
                            <label for="Name" class="my-form-label">Email Address</label>
                            <input id="name" type="text" name="name" value="{{ old('name') }}"  class="my-form-input @error('name') @enderror" required autocomplete="name" autofocus/>
                        </div>
                        <div class="flex flex-col mb-3">
                            <label for="Name" class="my-form-label">Card Number</label>
                            <input id="name" type="text" name="name" value="{{ old('name') }}"  class="my-form-input @error('name') @enderror" required autocomplete="name" autofocus/>
                        </div>
                        <div class="flex flex-col mb-3">
                            <label for="Name" class="my-form-label">Card Expiry</label>
                            <input id="name" type="date" name="name" value="{{ old('name') }}"  class="my-form-input @error('name') @enderror" required autocomplete="name" autofocus/>
                        </div>
                        <div class="flex flex-col mb-3">
                            <label for="Name" class="my-form-label">Card CVV</label>
                            <input id="name" type="text" name="name" value="{{ old('name') }}"  class="my-form-input @error('name') @enderror" required autocomplete="name" autofocus/>
                        </div>

                        <div class="flex flex-col-reverse gap-2 sm:flex-row mt-6 mb-2 sm:justify-between">
                            <a href="{{ route('upload.documents') }}" class="flex px-16 py-1 bg-white border border-gray-500 text-gray-700 hover:bg-gray-500 hover:text-white justify-center items-center">
                                Back 
                            </a>

                            <button type="submit" class="my-button">
                                Pay P1000
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>
    
@endsection