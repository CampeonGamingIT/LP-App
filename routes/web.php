<?php

use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::post('/{domain}/{path}/{lang}/{curr}/{query_string}', LandingPageController::class);
