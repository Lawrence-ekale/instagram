<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CountyController;
use App\Http\Controllers\SubCountyController;
use App\Http\Controllers\WardController;
use App\Http\Controllers\LocationController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/country/save',[CountryController::class,'save']);
Route::post('/county/save',[CountyController::class,'save']);
Route::post('/subcounty/save',[SubCountyController::class,'save']);
Route::post('/ward/save',[WardController::class,'save']);
Route::post('/location/save',[LocationController::class,'save']);
