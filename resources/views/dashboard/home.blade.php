@extends('layouts.dashboard-header')

@section('features')
<section class="w-full max-w-7xl">
    <div>
        <div class="flex flex-row items-end justify-between mx-8 sm:mx-16">
            <h5 class="text-heading text-base font-medium">Dashboard</h5>
            <!--a href="{{route('basic.details')}}" class="my-button-small flex items-center">
                <div class="">
                    New Permit
                </div> 
            </!--a -->
        </div>
        <div class="mt-2 border-t-2 border-gray-300 mx-8 sm:mx-16"></div>
    </div>
    @if(false)
    <div class="mt-4 mx-8 sm:mx-16">
        <div class="md:grid md:grid-cols-5 gap-2">
            <div class="md:col-span-3">
                <div class="bg-white p-4 mt-3 flex flex-col rounded shadow-md"> 
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

                <div class="bg-white p-4 mt-8 flex flex-col rounded shadow-md">
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
            </div>
            <div class="md:col-span-2">
                <div class="flex flex-col items-center md:items-end gap-4 mt-4">
                    <a href="#" class="bg-white w-60 p-3 rounded hover:shadow-md border border-transparent hover:border-gray-100">
                        <div class="flex gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-7 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                            </svg>
                            <div>
                                <h5 class="font-headings text-headings tracking-wider font-semibold text-gray-600">IMPORT PERMIT</h5> 
                                <div class=" text-sm text-gray-400">
                                New Import permit
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="{{route('basic.details')}}" class="bg-white w-60 p-3 rounded hover:shadow-md border border-transparent hover:border-gray-100">
                        <div class="flex gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-7 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                            </svg>
                            <div>
                                <h5 class="font-headings text-headings tracking-wider font-semibold text-gray-600">EXPORT PERMIT</h5> 
                                <div class=" text-sm text-gray-400">
                                New Export permit
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="bg-white w-60 p-3 rounded hover:shadow-md border border-transparent hover:border-gray-100">
                        <div class="flex gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-7 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                            </svg>
                            <div>
                                <h5 class="font-headings text-headings tracking-wider font-semibold text-gray-600">REBATE CERTIFICATE</h5> 
                                <div class=" text-sm text-gray-400">
                                New Rebate certificate
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
       
    </div>
    @elseif(false)
    <div class="mt-4">
        <div class="flex mx-8 sm:mx-16 gap-4">
            <div class="flex flex-col gap-4">
                <h5 class="text-gray-900 text-2xl font-medium">Apply for a new permit</h5>
                <p class="supporting-text">You don't have any permits yet. Create a new permit by chosing an option.</p>  
                <div class="flex flex-wrap gap-4 mt-4">
                    <a href="#" class="bg-white w-60 p-3 rounded hover:shadow-md border border-transparent hover:border-gray-100">
                        <div class="flex gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-7 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                            </svg>
                            <div>
                                <h5 class="font-headings text-headings tracking-wider font-semibold text-gray-600">IMPORT PERMIT</h5> 
                                <div class=" text-sm text-gray-400">
                                New Import permit
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="{{route('basic.details')}}" class="bg-white w-60 p-3 rounded hover:shadow-md border border-transparent hover:border-gray-100">
                        <div class="flex gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-7 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                            </svg>
                            <div>
                                <h5 class="font-headings text-headings tracking-wider font-semibold text-gray-600">EXPORT PERMIT</h5> 
                                <div class=" text-sm text-gray-400">
                                New Export permit
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="bg-white w-60 p-3 rounded hover:shadow-md border border-transparent hover:border-gray-100">
                        <div class="flex gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-7 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                            </svg>
                            <div>
                                <h5 class="font-headings text-headings tracking-wider font-semibold text-gray-600">REBATE CERTIFICATE</h5> 
                                <div class=" text-sm text-gray-400">
                                New Rebate certificate
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="hidden md:block">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-64 w-64 flex-shrink-0 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                </svg>
            </div>
        </div>
    </div>
    @else
    <div class="mt-4">
        <div class="flex mx-8 sm:mx-16 gap-4">
            <div class="flex flex-col gap-4">
                <h5 class="text-gray-900 text-2xl font-medium">Register as an Exporter/Importer</h5>
                <p class="supporting-text">You are not registered as an importer or exporter of goods yet. Please register to be able to create a new permit.</p>  
                <div class="flex flex-wrap gap-4 mt-4">
                    <a href="#" class="bg-white w-60 p-3 rounded hover:shadow-md border border-transparent hover:border-gray-100">
                        <div class="flex gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-7 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                            </svg>
                            <div>
                                <h5 class="font-headings text-headings tracking-wider font-semibold text-gray-600">IMPORTER</h5> 
                                <div class=" text-sm text-gray-400">
                                Import Registration
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="{{route('exporter.basics')}}" class="bg-white w-60 p-3 rounded hover:shadow-md border border-transparent hover:border-gray-100">
                        <div class="flex gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-7 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                            </svg>
                            <div>
                                <h5 class="font-headings text-headings tracking-wider font-semibold text-gray-600">EXPORTER</h5> 
                                <div class=" text-sm text-gray-400">
                                Exporter Scrap and Waste
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="hidden md:block">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-64 w-64 flex-shrink-0 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                </svg>
            </div>
        </div>
    </div>
    @endif
    

</section>
@endsection
