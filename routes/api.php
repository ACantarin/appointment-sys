<?php

use App\Http\Controllers\AddressController;
use Illuminate\Support\Facades\Route;

Route::get("/address/{zip_code}", [AddressController::class, "show"]);
Route::get("/patients/document/{document}",["as" => "patients.document", "uses" => "App\Http\Controllers\PatientController@getDocument"]);
Route::get("/doctors/register-number/{register_number}",["as" => "doctors.registerNumber", "uses" => "App\Http\Controllers\DoctorController@getRegisterNumber"]);
