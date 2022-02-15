<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ApplicationsController;
use App\Http\Controllers\ImportPermitController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [ApplicationsController::class, 'index'])->name('landing');


Auth::routes();
Route::middleware(['auth'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');

    //Exporter Registration
    Route::get('/Register/Exporter/Basics', [RegistrationController::class, 'exportRegBasics'])->name('exporter.basics');
    Route::post('/Register/Exporter/Basics', [RegistrationController::class, 'exportRegBasics'])->name('exporter.basics.post');
    
    //Imports
    Route::get('/ImportPermit/BasicDetails', [ImportPermitController::class, 'basicDetails'])->name('import.basic.details');
    Route::post('/ImportPermit/BasicDetails', [ImportPermitController::class, 'postbasicDetails'])->name('import.basic.details.post');
    
    //Import Permit (FORM A) Bread Loaves & Pasteries
    Route::get('/ImportPermit/Goods', [ImportPermitController::class, 'goodsDetails'])->name('import.goods.details');
    Route::post('/ImportPermit/Goods', [ImportPermitController::class, 'postGoodsDetails'])->name('import.goods.details.post');
    //Import Permit (FORM 1C.2) Manufactured Goods


    //Import Permit Rebate Certificate

    //step-1
    //Route::get('/BasicDetails', [ApplicationsController::class, 'basicInformation'])->name('basic.details');
    //Route::post('/BasicDetails', [ApplicationsController::class, 'postBasicInformation'])->name('basic.details.post');
    //step-2
    //Route::get('/BusinessDetails', [ApplicationsController::class, 'businessDetails'])->name('business.details');
    //Route::post('/BusinessDetails', [ApplicationsController::class, 'postBusinessDetails'])->name('business.details.post');
    //step-3
    //Route::get('/UploadDocuments', [ApplicationsController::class, 'uploadDocuments'])->name('upload.documents');
    //Route::post('/UploadDocuments', [ApplicationsController::class, 'postUploadDocuments'])->name('upload.documents.post');
    //step-4

    Route::get('/Payments', [ApplicationsController::class, 'payment'])->name('pay');
    Route::post('/Payments', [ApplicationsController::class, 'payment'])->name('pay.post');


    //Route::get('/MyPermits', [ApplicationsController::class, 'MyPermits']);
    //Route::get('/MyApplications', [ApplicationsController::class, 'myApplications']);
});

Route::group(['prefix' =>'Officer'], function () {
    //'middleware' =>'moderator'
    Route::get('/Panel', [HomeController::class, 'officers']);
});

Route::group(['prefix' =>'admin', 'middleware' =>'admin'], function () {

});
//Route::get('/user/challenge/admin/get-role', [AdminController::class, 'createFirstAdmin'])->middleware(['auth', 'verified']);

