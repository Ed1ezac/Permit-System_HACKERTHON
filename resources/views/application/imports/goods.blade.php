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
            <application-progress step="{{2}}"></application-progress>
        </div>
        
        <div class="sm:col-span-3 px-8">
            <div class="bg-white rounded shadow-md py-4 px-6 max-w-lg">
                <form action="{{ route('import.goods.details.post') }}" method="POST">
                    @csrf
                    <div class="flex flex-col mb-3">
                        <label for="postal_address" class="my-form-label">{{ __('Goods') }}</label>
                        <div class="flex">
                            <input type="text" name="spec1" value="{{ old('spec1') }}" class="my-form-input 
                            @error('spec1') bg-red-200 border border-red-500 @enderror" required>
                            <input type="text" name="postal_address" value="{{ old('postal_address') }}" class="my-form-input 
                            @error('postal_address') bg-red-200 border border-red-500 @enderror" required>
                        </div>
                        @error('spec1')
                        <span class="my-form-alert" role="alert">
                            <strong class="text-sm">{{ $message }}</strong>
                        </span>
                        @enderror                            
                    </div>

                    <div class="flex flex-col mb-3">
                        <label for="destination_of_goods" class="my-form-label">{{ __('Destination Of Goods') }}</label>
                        <input type="text" name="destination_of_goods" value="{{ old('destination_of_goods') }}" class="my-form-input 
                            @error('destination_of_goods') bg-red-300 border border-red-500 @enderror" required>
                        @error('destination_of_goods')
                            <span class="my-form-alert" role="alert">
                                <strong class="text-sm">{{ $message }}</strong>
                            </span>
                        @enderror                            
                    </div>

                    <div class="flex flex-col mb-3">
                        <label for="destination_of_gport_of_entryoods" class="my-form-label">{{ __('Port Of Entry') }}</label>
                        <input type="text" name="port_of_entry" value="{{ old('port_of_entry') }}" class="my-form-input 
                            @error('port_of_entry') bg-red-300 border border-red-500 @enderror" required>
                        @error('port_of_entry')
                            <span class="my-form-alert" role="alert">
                                <strong class="text-sm">{{ $message }}</strong>
                            </span>
                        @enderror                            
                    </div>
                    

                    <div class="flex flex-col-reverse gap-2 sm:flex-row mt-6 mb-2 sm:justify-between">
                        <a href="{{ route('import.basic.details') }}" class="flex px-16 py-1 bg-white border border-gray-500 text-gray-700 hover:bg-gray-500 hover:text-white justify-center items-center">
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
@endsection