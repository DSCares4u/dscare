<?php

use Illuminate\Support\Facades\Route;

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



Route::get('/', function () {
    return view('home.index');
});


Route::get('/about', function () {
    return view('home.about');
});

Route::get('/appointment', function () {
    return view('home.bookAppointment');
});

Route::get('/plans', function () {
    return view('home.plans');
});

Route::get('/services', function () {
    return view('home.services');
});

Route::get('/career', function () {
    return view('home.career');
});

Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/admin/manage-doctor', function () {
    return view('admin.manageDoctor');
});

Route::get('/admin/manage-doctor/insert', function () {
    return view('admin.insertDoctor');
});

Route::get('/admin/manage-user', function () {
    return view('admin.manageUser');
});

Route::get('/admin/manage-user/insert', function () {
    return view('admin.insertUser');
});

Route::get('/admin/manage-book-service', function () {
    return view('admin.managebookService');
});
Route::get('/admin/manage-book-service/insert', function () {
    return view('admin.bookService');
});
Route::get('/admin/manage-book-plan', function () {
    return view('admin.manageBookedPlan');
});
Route::get('/admin/manage-book-plan/insert', function () {
    return view('admin.bookPlan');
});
Route::get('/admin/manage-call', function () {
    return view('admin.manageCall');
});

Route::get('/admin/manage-call/insert', function () {
    return view('admin.insertCall');
});

Route::get('/admin/manage-plan', function () {
    return view('admin.managePlan');
});

Route::get('/admin/manage-plan/insert', function () {
    return view('admin.insertPlan');
});

Route::get('/admin/manage-appointment/insert', function () {
    return view('admin.insertAppointment');
});

Route::get('/admin/manage-appointment', function () {
    return view('admin.manageAppointment');
});

Route::get('/admin/manage-service', function () {
    return view('admin.manageService');
});

Route::get('/admin/manage-service/insert', function () {
    return view('admin.insertService');
});

Route::get('/doctor', function () {
    return view('doctor.index');
});

Route::get('/doctor/appointment', function () {
    return view('doctor.myAppointment');
});

Route::get('/doctor/patient', function () {
    return view('doctor.patient');
});

Route::get('/doctor/profile', function () {
    return view('doctor.myProfile');
});
