<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Customer;
use App\Http\Controllers\Api\AnalysisController;

Route::get('/analysis', [ AnalysisController::class, 'index' ])
->middleware('auth:sanctum')->name('api.analysis');

Route::get('/searchCustomers', function (Request $request) {
    return Customer::searchCustomers($request->search)
    ->select('id', 'name', 'kana', 'tel')->paginate(50);
})->middleware('auth:sanctum');

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
