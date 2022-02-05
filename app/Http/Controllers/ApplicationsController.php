<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BasicDetailsRequest;
use App\Http\Requests\BusinessDetailsRequest;
use App\Http\Requests\UploadDocumentsRequest;

class ApplicationsController extends Controller
{
    //step 1
    public function index(Request $request){
        $application = $request->session()->get('application');
        return view('welcome', compact('application'));
    }

    public function basicInformation(Request $request){
        $application = $request->session()->get('application');
        return view('application.basic-details', compact('application'));
    }

    public function postBasicInformation(BasicDetailsRequest $request){
        if(empty($request->session()->get('application'))){
            $application = array('Name' => 'Ed', 'Id' => '282372312');
            //$application->fill($validatedData);
            $request->session()->put('application', $application);

        }else{
            $application = $request->session()->get('application');
            //$application->fill($validatedData);
            $request->session()->put('application', $application);
        }
        return redirect()->route('business.details');
    }

    //step 2
    public function businessDetails(Request $request){
        $application = $request->session()->get('application');
        return view('application.business_details', compact('application'));
    }

    public function postBusinessDetails(BusinessDetailsRequest $request){
        $application = $request->session()->get('application');
        //$product->fill($validatedData);
        $request->session()->put('application', $application);
        return redirect()->route('upload.documents');
    }

    //step 3
    public function uploadDocuments(Request $request){
        $application = $request->session()->get('application');
        return view('application.upload_documents');
    }

    public function postUploadDocuments(UploadDocumentsRequest $request){
        $application = $request->session()->get('application');
        //$product->fill($validatedData);
        $request->session()->put('application', $application);
        return redirect()->route('pay');
    }

    //step 4
    public function payment(Request $request){
        $application = $request->session()->get('application');
        return view('application.payment', compact('application'));
    }

    //submit
    public function postPayment(){
        return view('application.payment');
    }

    public function myApplications(){
        return view('application.my_applications');
    }

    public function myPermits(){
        return view('auth.my_permits');
    }

}
