<?php

use App\Http\Controllers\Api\LocationController;
use App\Http\Controllers\Api\ProvinceController;
use App\Http\Controllers\Api\RegencyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/province', ProvinceController::class);
Route::apiResource('/regency', RegencyController::class);

Route::get('/getregencies/{id}', [LocationController::class, 'getRegencies']);
Route::get('/getdistricts/{id}', [LocationController::class, 'getDistricts']);
Route::get('/getvillages/{id}', [LocationController::class, 'getVillages']);
