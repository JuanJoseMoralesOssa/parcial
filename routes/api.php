<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PlantCategoryController;
use App\Http\Controllers\PlantController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('/plants', PlantController::class)->middleware('auth:sanctum');
Route::post('/login', [LoginController::class, 'login']);

Route::apiResource('/plant-categories', PlantCategoryController::class);
