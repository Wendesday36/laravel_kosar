<?php

use App\Http\Controllers\BasketController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductTypeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|Route::get('basketAuthUser',[BasketController::class,'basketAuthUser']);
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('auth.basic')->group(function () {
    Route::get('ItemwithB', [BasketController::class, 'ItemwithB']);
    Route::post('AddItem/{item_id}', [BasketController::class, 'AddItem']);
    
});

Route::get('baskets', [BasketController::class, 'index']);
Route::get('baskets/{user_id}/{item_id}', [BasketController::class, 'show']);
Route::post('baskets', [BasketController::class, 'store']);
Route::get('allproduct/{id}',[ProductTypeController::class, 'AllProduct']);
