<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\userDataController;
// Route::get('/api/new',[userDataController::class, 'index']);

// CURD operation

// Route::post('/api/new',[userDataController::class,'create']);
// Route::get('/api/user',[userDataController::class,'show']);
// Route::get('/api/user/{id}',[userDataController::class,'destroy']);
// Route::put('/api/user/{id}',[userDataController::class,'edit']);
// Route::post('/api/user/{id}',[userDataController::class,'update']);


//CURD operation

