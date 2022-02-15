<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    //
    public function exportRegBasics(Request $request){

        return view('application.exports.exporter');
    }

    public function exportRegBasicsPost(Request $request){

        //return view('application.exports.post');
    }

    public function exportRegUploads(Request $request){

        return view('application.exports.uploads');
    }
}
