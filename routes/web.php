<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\BlogController;
use App\Http\Controllers\frontend\PrivacypolicyController;
use App\Http\Controllers\frontend\ServicesController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\HomeinsuranceController;
use App\Http\Controllers\frontend\LifeinsuranceController;
use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\Strip\StripController;

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

Route::get('/',[HomeController::class,'index']);
Route::get('/about',[AboutController::class,'index']);
Route::get('/blog',[BlogController::class,'index']);
Route::get('/service',[ServicesController::class,'index']);
Route::get('/contact',[ContactController::class,'index']);
Route::get('/privacypolicy',[PrivacypolicyController::class,'index']);
Route::get('/homeinsurance',[HomeinsuranceController::class,'index']);
Route::get('/lifeinsurance',[LifeinsuranceController::class,'index']);

//Strip Payment
Route::get('stripe',[StripController::class,'stripe']);
Route::post('stripe',[StripController::class,'stripePost'])->name('stripe.post');


Route::get('/home', function () {
    return view('welcome');
});


Route::get('send-email', [SendEmailController::class, 'index']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
