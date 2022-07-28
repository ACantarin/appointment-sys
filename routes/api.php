<?php

use App\Http\Controllers\AddressController;
use Illuminate\Support\Facades\Route;

Route::get("/address/{zip_code}", [AddressController::class, "show"]);
Route::get("/patients/document/{document}",["as" => "patients.document", "uses" => "App\Http\Controllers\PatientController@getDocument"]);
