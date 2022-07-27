<?php

use App\Http\Controllers\PatientController;
use App\Http\Controllers\SpecialtyController;
use Illuminate\Http\Request;
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

Route::get("/specialties", ["as" => "specialties.index", "uses" => "App\Http\Controllers\SpecialtyController@index"]);
Route::post("/specialties/save", [SpecialtyController::class, "store"]);
Route::get("/specialties/add",["as" => "specialties.add", "uses" => "App\Http\Controllers\SpecialtyController@add"]);
Route::get("/specialties/save",["as" => "specialties.save", "uses" => "App\Http\Controllers\SpecialtyController@store"]);

Route::get("/doctors", ["as" => "doctors.index", "uses" => "App\Http\Controllers\DoctorController@index"]);
Route::get("/doctors/add",["as" => "doctors.add", "uses" => "App\Http\Controllers\DoctorController@add"]);
Route::post("/doctors/save",["as" => "doctors.save", "uses" => "App\Http\Controllers\DoctorController@store"]);

Route::get("/patients", [PatientController::class, "index"]);
Route::get("/patients", ["as" => "patients.index", "uses" => "App\Http\Controllers\PatientController@index"]);
Route::post("/patients/save", [PatientController::class, "store"]);

Route::post("/test", function(Request $request) {
    dd($request);
});
