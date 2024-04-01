<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PlanApiController;
use App\Http\Controllers\DoctorApiController;
use App\Http\Controllers\ServiceApiController;
use App\Http\Controllers\AppointmentApiController;

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

Route::post('admin/plan',[PlanApiController::class,'store'])->name('plan.store');
Route::get('admin/plan',[PlanApiController::class,'index'])->name('plan.index');
Route::get('admin/plan/{id}',[PlanApiController::class,'show']);
Route::get('admin/plan/{id}/edit',[PlanApiController::class,'edit']);
Route::put('admin/plan/{id}/edit',[PlanApiController::class,'update']);
Route::delete('admin/plan/{id}/delete',[PlanApiController::class,'destroy']);

Route::post('admin/doctor',[DoctorApiController::class,'store'])->name('doctor.store');
Route::get('admin/doctor',[DoctorApiController::class,'index'])->name('doctor.index');
Route::get('admin/doctor/{id}',[DoctorApiController::class,'show']);
Route::get('admin/doctor/{id}/edit',[DoctorApiController::class,'edit']);
Route::put('admin/doctor/{id}/edit',[DoctorApiController::class,'update']);
Route::delete('admin/doctor/{id}/delete',[DoctorApiController::class,'destroy']);

Route::post('/admin/service',[ServiceApiController::class,'store'])->name('service.store');
Route::get('/admin/service',[ServiceApiController::class,'index'])->name('service.index');
Route::get('/admin/service/{id}',[ServiceApiController::class,'show']);
Route::get('/admin/service/{id}/edit',[ServiceApiController::class,'edit']);
Route::put('/admin/service/{id}/edit',[ServiceApiController::class,'update']);
Route::delete('/admin/service/{id}/delete',[ServiceApiController::class,'destroy']);

Route::post('/admin/appointment',[AppointmentApiController::class,'store'])->name('appointment.store');
Route::get('/admin/appointment',[AppointmentApiController::class,'index'])->name('appointment.index');
Route::get('/admin/appointment/{id}',[AppointmentApiController::class,'show']);
Route::get('/admin/appointment/{id}/edit',[AppointmentApiController::class,'edit']);
Route::put('/admin/appointment/{id}/edit',[AppointmentApiController::class,'update']);
Route::delete('/admin/appointment/{id}/delete',[AppointmentApiController::class,'destroy']);
