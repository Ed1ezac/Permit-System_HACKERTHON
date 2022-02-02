<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ApplicationsController;


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
    Route::post('/BasicDetails', [ApplicationsController::class, 'postBasicInformation'])->name('basic.details.post');

    Route::get('/BusinessDetails', [ApplicationsController::class, 'businessDetails'])->name('business.details');
    Route::post('/BusinessDetails', [ApplicationsController::class, 'postBusinessDetails'])->name('business.details.post');

    Route::get('/UploadDocuments', [ApplicationsController::class, 'uploadDocuments'])->name('upload.documents');
    Route::post('/UploadDocuments', [ApplicationsController::class, 'postUploadDocuments'])->name('upload.documents.post');

    Route::get('/Payments', [ApplicationsController::class, 'payment'])->name('pay');
    Route::post('/Payments', [ApplicationsController::class, 'payment'])->name('pay.post');

    Route::get('/MyPermits', [ApplicationsController::class, 'MyPermits']);
    Route::get('/MyApplications', [ApplicationsController::class, 'myApplications']);
});

Route::group(['prefix' =>'moderator', 'middleware' =>'moderator'], function () {
    
});

Route::group(['prefix' =>'admin', 'middleware' =>'admin'], function () {

});
//Route::get('/user/challenge/admin/get-role', [AdminController::class, 'createFirstAdmin'])->middleware(['auth', 'verified']);

