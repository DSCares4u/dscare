<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PlanApiController;
use App\Http\Controllers\DoctorApiController;
use App\Http\Controllers\ServiceApiController;
use App\Http\Controllers\BookServiceApiController;
use App\Http\Controllers\BookPlanApiController;
use App\Http\Controllers\AppointmentApiController;
use App\Http\Controllers\CallApiController;

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
Route::get('admin/manage-plan/view/{id}',[PlanApiController::class,'show']);
Route::get('admin/manage-plan/edit/{id}',[PlanApiController::class,'edit']);
Route::put('admin/manage-plan/edit/{id}',[PlanApiController::class,'update']);
Route::delete('admin/manage-plan/delete/{id}',[PlanApiController::class,'destroy']);

Route::post('admin/doctor',[DoctorApiController::class,'store'])->name('doctor.store');
Route::get('admin/doctor',[DoctorApiController::class,'index'])->name('doctor.index');
Route::get('admin/manage-doctor/view/{id}',[DoctorApiController::class,'show']);
Route::get('admin/manage-doctor/edit/{id}',[DoctorApiController::class,'edit']);
Route::put('admin/manage-doctor/edit/{id}',[DoctorApiController::class,'update']);
Route::delete('admin/manage-doctor/delete/{id}',[DoctorApiController::class,'destroy']);
Route::get('admin/manage-doctor/trash',[DoctorApiController::class,'indexDeleted'])->name('doctor.index.deleted');
Route::delete('admin/manage-doctor/trash/delete-permanent/{id}',[DoctorApiController::class,'destroyPermanently']);
Route::put('admin/manage-doctor/trash/restore/{id}',[DoctorApiController::class,'restore']);

Route::post('/admin/service',[ServiceApiController::class,'store'])->name('service.store');
Route::get('/admin/service',[ServiceApiController::class,'index'])->name('service.index');
Route::get('/admin/manage-service/view/{id}',[ServiceApiController::class,'show']);
Route::get('/admin/manage-service/edit/{id}',[ServiceApiController::class,'edit']);
Route::put('/admin/manage-service/edit/{id}',[ServiceApiController::class,'update']);
Route::delete('/admin/manage-service/delete/{id}',[ServiceApiController::class,'destroy']);

Route::post('/admin/appointment',[AppointmentApiController::class,'store'])->name('appointment.store');
Route::get('/admin/appointment',[AppointmentApiController::class,'index'])->name('appointment.index');
Route::get('/admin/manage-appointment/view/{id}',[AppointmentApiController::class,'show']);
Route::get('/admin/manage-appointment/edit/{id}',[AppointmentApiController::class,'edit']);
Route::put('/admin/manage-appointment/edit/{id}',[AppointmentApiController::class,'update']);
Route::delete('/admin/manage-appointment/delete/{id}',[AppointmentApiController::class,'destroy']);

Route::post('/admin/call',[CallApiController::class,'store'])->name('call.store');
Route::get('/admin/call',[CallApiController::class,'index'])->name('call.index');
Route::get('/admin/manage-call/view/{id}',[CallApiController::class,'show']);
Route::get('/admin/manage-call/edit/{id}',[CallApiController::class,'edit']);
Route::put('/admin/manage-call/edit/{id}',[CallApiController::class,'update']);
Route::delete('/admin/manage-call/delete/{id}',[CallApiController::class,'destroy']);

Route::post('/admin/book-service',[BookServiceApiController::class,'store'])->name('book.service.store');
Route::get('/admin/book-service',[BookServiceApiController::class,'index'])->name('book.service.index');
Route::get('/admin/manage-book-service/view/{id}',[BookServiceApiController::class,'show']);
Route::get('/admin/manage-book-service/edit/{id}',[BookServiceApiController::class,'edit']);
Route::put('/admin/manage-book-service/edit/{id}',[BookServiceApiController::class,'update']);
Route::delete('/admin/manage-book-service/delete/{id}',[BookServiceApiController::class,'destroy']);
Route::get('admin/manage-book-service/trash',[BookServiceApiController::class,'indexDeleted'])->name('book.service.index.deleted');
Route::delete('admin/manage-book-service/trash/delete-permanent/{id}',[BookServiceApiController::class,'destroyPermanently']);
Route::put('admin/manage-book-service/trash/restore/{id}',[BookServiceApiController::class,'restore']);

Route::post('/admin/book-plan',[BookPlanApiController::class,'store'])->name('book.plan.store');
Route::get('/admin/book-plan',[BookPlanApiController::class,'index'])->name('book.plan.index');
Route::get('/admin/manage-book-plan/view/{id}',[BookPlanApiController::class,'show']);
Route::get('/admin/manage-book-plan/edit/{id}',[BookPlanApiController::class,'edit']);
Route::put('/admin/manage-book-plan/edit/{id}',[BookPlanApiController::class,'update']);
Route::delete('/admin/manage-book-plan/delete/{id}',[BookPlanApiController::class,'destroy']);
Route::get('admin/manage-book-plan/trash',[BookPlanApiController::class,'indexDeleted'])->name('book.plan.index.deleted');
Route::delete('admin/manage-book-plan/trash/delete-permanent/{id}',[BookPlanApiController::class,'destroyPermanently']);
Route::put('admin/manage-book-plan/trash/restore/{id}',[BookPlanApiController::class,'restore']);

Route::post('/plans/book-now/{id}',[BookPlanApiController::class,'bookPlan']);
Route::post('/appointment/book-now/{id}',[AppointmentApiController::class,'bookAppointment']);

// Route::get('/admin/manage-student/view/{id}', [StudentApiController::class, 'edit'])->name('editStudent');
// Route::put('/admin/manage-student/edit/{id}', [StudentApiController::class, 'upgrade'])->name('updateStudent');


