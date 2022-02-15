<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ApplicationsController;
use App\Http\Controllers\LondonController;
use App\Http\Controllers\GoodnightController;


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
Route::get('/MyApplications', [ApplicationsController::class, 'myApplications']);
Route::get('/BusinessDetails', [ApplicationsController::class, 'businessDetails']);
Route::get('/UploadDocuments', [ApplicationsController::class, 'uploadDocuments']);
Route::get('/proceed', [ApplicationsController::class, 'proceed']);
Route::get('/MyPermits', [ApplicationsController::class, 'MyPermits']);
Route::get('/Payments', [ApplicationsController::class, 'payment']);




Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
