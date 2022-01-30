<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BasicDetailsRequest;

class ApplicationsController extends Controller
{
    //

    public function index(){

        return view('welcome');
    }

    public function proceed(Request $request){

        //dd($request);
        $step = 1;

        $this->validateApplication();

        switch($step){
            case 1:
                return $this->businessDetails(); 
            case 2:
                return $this->uploadDocuments();
            case 3:
                return $this->payment();
        }
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
    

    private function validateApplication(){
        $request = request();
        $step = $request->input('step');
        switch($step){
            case 1:
                $this->validateBasicInfo();
            break;
            case 2:
                break;
        }
    }

    private function validateBasicInfo(){

    }

}
