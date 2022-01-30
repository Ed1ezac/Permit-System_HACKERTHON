<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicationsController extends Controller
{
    //

    public function index(){

        return view('welcome');
    }


    //number 2
    public function businessDetails(){

        //
        return view('appliction.business_details');
    }

    public function uploadDocuments(){

        return view('appliction.upload_documents');
    }

    public function payment(){
        
        return view('appliction.payment');
    }

    public function myApplications(){

        return view('appliction.my_applications');
    }
    


}
