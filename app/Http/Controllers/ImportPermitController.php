<?php

namespace App\Http\Controllers;

use App\Models\ImportPermit;
use Illuminate\Http\Request;
use App\Http\Requests\BasicDetailsRequest;

class ImportPermitController extends Controller
{
    //
    //public function chooseTy

    public function basicDetails(Request $request){

        $permit = $request->session()->get('permit');
        return view('application.imports.basic-details', compact('permit'));
    }

    public function postbasicDetails(BasicDetailsRequest $request){
        
        if(empty($request->session()->get('permit'))){
            $permit = new ImportPermit();
            $permit->fill($request->validated());
            $request->session()->put('permit', $permit);
        }else{
            $permit = $request->session()->get('permit');
            $permit->fill($request->validated());
            $request->session()->put('permit', $permit);
        }
        // if($request->input('permit_type') == "Manufactured Goods") {
        //     return view('');
        // }
        return redirect()->route('import.goods.details');
    }

    public function goodsDetails(Request $request){
        $permit = $request->session()->get('permit');
        return view('application.imports.goods', compact('permit'));   
    }

    public function postGoodsDetails(Request $request){
        dd($request);
        ////////
        if(empty($request->session()->get('permit'))){
            $permit = new ImportPermit();
            $permit->fill($request->validated());
            $request->session()->put('permit', $permit);
        }else{
            $permit = $request->session()->get('permit');
            $permit->fill($request->validated());
            $request->session()->put('permit', $permit);
        }

    }

    
}
