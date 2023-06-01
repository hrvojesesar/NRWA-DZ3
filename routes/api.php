<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerDemographicControllerRestAPI;
use App\Http\Controllers\RegionControllerRestAPI;
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

Route::resource('customerdemographic', CustomerDemographicControllerRestAPI::class);
Route::resource('region', RegionControllerRestAPI::class);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
