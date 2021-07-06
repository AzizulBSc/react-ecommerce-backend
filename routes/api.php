<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
     return $request->user();});
Route::post('register',[UserController::class,'store']);
Route::post('login',[UserController::class,'index']);
Route::post('product', [ProductController::class,'store']);
Route::get('product', [ProductController::class,'index']);
Route::delete('product/{id}',[ProductController::class,'destroy']);
Route::get('product/{id}',[ProductController::class,'show']);
Route::post('update',[ProductController::class,'update']);
