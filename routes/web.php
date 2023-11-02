<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuildingTypeController;
use App\Http\Controllers\AdditionalFeatureController;
use App\Http\Controllers\CostEstimateController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/add-building-type', function () {
    return view('add-building-type');
});

Route::get('/add-additional-feature', function () {
    return view('add-additional-feature');
});



Route::get('/', [CostEstimateController::class, 'create']);
Route::post('/cost-estimates-form', [CostEstimateController::class, 'store']);


Route::post('/add-building-type', [BuildingTypeController::class, 'store']);
Route::post('/add-additional-feature', [AdditionalFeatureController::class, 'store']);

Route::post('/submit-cost-estimates', [CostEstimateController::class, 'submitCostEstimates']);

Route::get('/cost-estimates-result', function () {
    // You can add data if needed
    return view('cost-estimates-result');
});
