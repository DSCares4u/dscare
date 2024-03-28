<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PlanApiController;
use App\Http\Controllers\DoctorApiController;

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


Route::post('/login',[AuthController::class,'login']);
Route::post('/verify-otp',[AuthController::class,'verifyOtp'])->name('api.verify.otp');

Route::post('plan',[PlanApiController::class,'store'])->name('plan.store');
Route::get('plan',[PlanApiController::class,'index'])->name('plan.index');
Route::get('plan/{id}',[PlanApiController::class,'show']);
Route::get('plan/{id}/edit',[PlanApiController::class,'edit']);
Route::put('plan/{id}/edit',[PlanApiController::class,'update']);
Route::delete('plan/{id}/delete',[PlanApiController::class,'destroy']);

Route::post('doctor',[DoctorApiController::class,'store'])->name('doctor.store');
Route::get('doctor',[DoctorApiController::class,'index'])->name('doctor.index');
Route::get('doctor/{id}',[DoctorApiController::class,'show']);
Route::get('doctor/{id}/edit',[DoctorApiController::class,'edit']);
Route::put('doctor/{id}/edit',[DoctorApiController::class,'update']);
Route::delete('doctor/{id}/delete',[DoctorApiController::class,'destroy']);
