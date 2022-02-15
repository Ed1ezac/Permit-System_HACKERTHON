@extends('layouts.dashboard-header')

@section('features')
<section class="w-full max-w-7xl">
    <div>
        <div class="flex flex-row items-end justify-between mx-8 sm:mx-16">
            <h5 class="text-heading text-base font-medium">Officers' Area</h5>  
        </div>
        <div class="mt-2 border-t-2 border-gray-300 mx-8 sm:mx-16"></div>
    </div>
    <div class="mt-3 mx-8 sm:mx-16">
        <payment-tabs></payment-tabs>
    </div>
    
</section>
@endsection