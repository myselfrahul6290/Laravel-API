<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\userDataController;

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
use App\Http\Controllers\userDataController;


Route::get('/user',[userDataController::class,'index']);
Route::get('/user/{id}',[userDataController::class,'show']);
Route::post('/user',[userDataController::class,'store']);
Route::put('/user/{id}',[userDataController::class,'update']);
Route::delete('/user/{id}',[userDataController::class,'destroy']);