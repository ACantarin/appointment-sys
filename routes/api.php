<?php

use App\Http\Controllers\AddressController;
use Illuminate\Support\Facades\Route;

Route::get("/address/{zip_code}", [AddressController::class, "show"]);
