<?php

use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingPageController::class, 'index']);
Route::get('/landings/create', [LandingPageController::class, 'create']);
Route::post('/landings', [LandingPageController::class, 'store']);
//Route::post('/{domain}/{path}/{lang}/{curr}/{query_string}', LandingPageController::class);
