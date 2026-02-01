<?php

use App\Http\Controllers\BikeController;
use App\Http\Controllers\OwnerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::apiResource('/owners',OwnerController::class)
    ->whereNumber('owner')
;

Route::apiResource('/bikes', BikeController::class)
    ->whereNumber('bike')
;