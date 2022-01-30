@extends('layouts.landing-header')

@section('content')

<div class="flex flex-col">
    <h5 class="ml-8 sm:ml-16 text-heading text-base">My Permits</h5>
    <div class="mt-2 border-t-2 border-gray-300 mx-8 sm:mx-16"></div>
</div>
<section>
    <div class="bg-white p-4 mt-3 flex flex-col mx-8 sm:mx-16 rounded shadow-md"> 
        <div class="flex justify-between">
            <a href="/permit/details" class="hover:underline hover:underline-offset-2 decoration-2 decoration-gray-700">
                <h3 class="heading-text">Noise and Nuisance Permit (06/02/22)</h3>
            </a>
            <div class="flex items-center px-1 rounded-full bg-yellow-300 text-yellow-800 text-xs font-bold"> pending</div>
        </div>
        <div class="mt-3 supporting-text">
            Edgar Kealeboga
        </div>
        <div class="supporting-text">
            ed1ezac@gmail.com
        </div>
    </div>
    <div class="bg-white p-4 mt-8 flex flex-col mx-8 sm:mx-16 rounded shadow-md">
        <div class="flex justify-between">
            <a href="/permit/details" class="hover:underline hover:underline-offset-2 decoration-2 decoration-gray-700">
                <h3 class="heading-text">Day Care Center Permit (06/02/22)</h3>
            </a>
            <div class="flex items-center px-1 rounded-full bg-green-300 text-green-800 text-xs font-bold"> approved</div>
        </div>
        <div class="mt-3 supporting-text">
            Edgar Kealeboga
        </div>
        <div class="supporting-text">
            ed1ezac@gmail.com
        </div>
    </div>
</section>

@endsection