<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\StudentController;
use App\Http\Controllers\Api\AutoinsuranceController;
use App\Http\Controllers\Api\AuthController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Student Api Start
Route::get('students',[StudentController::class,'index']);
Route::post('students',[StudentController::class,'store']);
//Student Api End

//Autoinsurance Api Start
Route::get('autoinsurance',[AutoinsuranceController::class,'index']);
Route::post('autoinsurance',[AutoinsuranceController::class,'store']);
Route::get('autoinsurance/{id}',[AutoinsuranceController::class,'show']);
Route::get('autoinsurance/{id}/edit',[AutoinsuranceController::class,'edit']);
Route::put('autoinsurance/{id}/edit',[AutoinsuranceController::class,'update']);
Route::delete('autoinsurance/{id}/delete',[AutoinsuranceController::class,'destroy']);

//Login Api Start

Route::controller(AuthController::class)->group(function(){

    Route::post('login','login');
    Route::post('register','register');
});






