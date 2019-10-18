<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('patient', 'PatientController@index');
Route::get('patient/{patient}', 'PatientController@show');
Route::post('/login', 'UserController@login');


// treatments
Route::post('treatment', 'TreatmentController@store');
Route::get('treatment', 'TreatmentController@index');

// appointments
Route::get('appointment', 'AppointmentController@index');
Route::post('appointment', 'AppointmentController@store');

// types
Route::get('types', 'TreatmentTypeController@index');

// doctor
Route::get('doctor','DoctorController@index');