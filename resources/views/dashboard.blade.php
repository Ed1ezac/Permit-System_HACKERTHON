@extends('layouts.dashboard-header')

@section('content')
<section class="pt-20 flex justify-center">
    <div class="bg-white max-w-lg flex justify-center  ">
        <form method="post" action="###">
            <div class=" flex flex-col  justify-center ">

                <div class=" flex flex-col bg-white my-4">
                    <label for="Name" class="my-form-label">Full Names</label>
                    <input type="text" class="my-form-input  ">
                </div>

                <div class="bg-white flex flex-col my-4 ">
                    <label for="Name" class="my-form-label">Physical Address</label>
                    <input type="text" class="my-form-input ">
                </div>

                <div class="bg-white flex flex-col my-4">
                    <label for="Name" class="my-form-label">Postal Address</label>
                    <input type="text" class="my-form-input  ">
                </div>

                <div class="bg-white flex flex-col my-4">
                    <label for="Name" class="my-form-label">Telephone Number</label>
                    <input type="text" class="my-form-input  ">
                </div>

                <div class="bg-white flex flex-col my-4">
                    <label for="Name" class="my-form-label">Identification Number</label>
                    <input type="text" class="my-form-input">
                </div>
                
            
            </div>

        </form>
            

    </div>
</section>
@endsection
