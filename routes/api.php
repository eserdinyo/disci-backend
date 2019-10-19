<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('patient', 'PatientController@index');
Route::get('patient/{patient}', 'PatientController@show');

// auth
Route::post('login', 'UserController@login');
Route::post('register', 'UserController@register');

// treatments
Route::post('treatment', 'TreatmentController@store');
Route::get('treatment', 'TreatmentController@index');

// appointments
Route::get('appointment', 'AppointmentController@index');
Route::post('appointment', 'AppointmentController@store');

// types
Route::get('types', 'TreatmentTypeController@index');

// doctor
Route::get('doctor', 'DoctorController@index');