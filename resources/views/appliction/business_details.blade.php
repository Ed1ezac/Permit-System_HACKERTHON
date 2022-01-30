@extends('layouts.landing-header')

@section('content')

<div class="flex flex-col">
    <h5 class="ml-8 sm:ml-16 text-heading text-base">Business Details</h5>
    <div class="mt-2 border-t-2 border-gray-300 mx-8 sm:mx-16"></div>
</div>
<section class="my-16 ">

    <div class="sm:grid grid-cols-6 ">
        <div class="sm:col-span-3">

        </div>
        <div class="sm:col-span-3 px-10">
            <div class="bg-white shadow rounded mr-16 ">
                <form method="get" action="####">
                    <div class="flex flex-col px-4  my-4">
                        
                        <div class=" flex flex-col my-4">
                            <label for="Name" class="my-form-label">Business Names</label>
                            <input id="name" type="text" name="name" value="{{ old('name') }}"  class="my-form-input @error('name') @enderror" required autocomplete="name" autofocus/>
                        </div>

                        <div class=" flex flex-col my-4">
                            <label for="Name" class="my-form-label">Incomporation Number</label>
                            <input id="name" type="text" name="name" value="{{ old('name') }}"  class="my-form-input @error('name') @enderror" required autocomplete="name" autofocus/>

                        </div>
                        
                        
                        <div class=" flex flex-col my-4">
                            <label for="Name" class="my-form-label">Tax Number</label>
                            <input id="name" type="text" name="name" value="{{ old('name') }}"  class="my-form-input @error('name') @enderror" required autocomplete="name" autofocus/>

                        </div>

                        <div class=" flex flex-col my-4">
                            <label for="Name" class="my-form-label">Location</label>
                            <input id="name" type="text" name="name" value="{{ old('name') }}"  class="my-form-input @error('name') @enderror" required autocomplete="name" autofocus/>

                        </div>

                        <div class=" flex flex-col my-4 ">
                            <label for="Name" class="my-form-label">Contact Details</label>
                            <input id="name" type="text" name="name" value="{{ old('name') }}"  class="my-form-input @error('name') @enderror" required autocomplete="name" autofocus/>

                        </div>
                        


                    </div>
                </form>
                
            </div>
        </div>
    </div>

</section>
>

@endsection