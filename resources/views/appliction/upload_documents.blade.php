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
                <div class="bg-white shadow rounded mr-16">
                    <form method= post action="####">
                        <div class="flex flex-col px-4  my-4 ">

                            <div class=" flex flex-col my-4">
                                <label for="Name" class="my-form-label">Certificate of Incorporation</label>
                                <input id="name" type="text" name="name" value="{{ old('name') }}"  class="my-form-input @error('name') @enderror" required autocomplete="name" autofocus/>
                            </div>

                            <div class=" flex flex-col my-4">
                                <label for="Name" class="my-form-label">Tax Clearance Certificate</label>
                                <input id="name" type="text" name="name" value="{{ old('name') }}"  class="my-form-input @error('name') @enderror" required autocomplete="name" autofocus/>
                            </div>
                            <div class=" flex flex-col my-4">
                                <label for="Name" class="my-form-label">Certified Copy of Omang</label>
                                <input id="name" type="text" name="name" value="{{ old('name') }}"  class="my-form-input @error('name') @enderror" required autocomplete="name" autofocus/>
                            </div>
                            <div class=" flex flex-col my-4">
                                <label for="Name" class="my-form-label">Copy of Trading Licence</label>
                                <input id="name" type="text" name="name" value="{{ old('name') }}"  class="my-form-input @error('name') @enderror" required autocomplete="name" autofocus/>
                            </div>
                            <div class=" flex flex-col my-4">
                                <label for="Name" class="my-form-label">Other Necessary DocumentsS</label>
                                <input id="name" type="text" name="name" value="{{ old('name') }}"  class="my-form-input @error('name') @enderror" required autocomplete="name" autofocus/>
                            </div>

                        </div>

                    </form>
                </div>

            </div>

        </div>
    </section>
    
@endsection