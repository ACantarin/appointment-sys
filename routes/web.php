<?php

use Illuminate\Support\Facades\Route;

Route::get("/specialties", ["as" => "specialties.index", "uses" => "App\Http\Controllers\SpecialtyController@index"]);
Route::get("/specialties/add",["as" => "specialties.add", "uses" => "App\Http\Controllers\SpecialtyController@add"]);
Route::post("/specialties/save",["as" => "specialties.save", "uses" => "App\Http\Controllers\SpecialtyController@store"]);

Route::get("/", ["as" => "index", "uses" => "App\Http\Controllers\AppointmentController@index"]);
Route::get("/appointments", ["as" => "appointments.index", "uses" => "App\Http\Controllers\AppointmentController@index"]);
Route::get("/appointments/add",["as" => "appointments.add", "uses" => "App\Http\Controllers\AppointmentController@add"]);
Route::post("/appointments/save",["as" => "appointments.save", "uses" => "App\Http\Controllers\AppointmentController@store"]);

Route::get("/doctors", ["as" => "doctors.index", "uses" => "App\Http\Controllers\DoctorController@index"]);
Route::get("/doctors/add",["as" => "doctors.add", "uses" => "App\Http\Controllers\DoctorController@add"]);
Route::post("/doctors/save",["as" => "doctors.save", "uses" => "App\Http\Controllers\DoctorController@store"]);

Route::get("/patients", ["as" => "patients.index", "uses" => "App\Http\Controllers\PatientController@index"]);
Route::get("/patients/add",["as" => "patients.add", "uses" => "App\Http\Controllers\PatientController@add"]);
Route::post("/patients/save",["as" => "patients.save", "uses" => "App\Http\Controllers\PatientController@store"]);
