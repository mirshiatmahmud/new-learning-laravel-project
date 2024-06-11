<?php

use App\Http\Controllers\contactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('home',[HomeController::class,'index']);
Route::get('contact',[contactController::class,'contact']);

Route::get('create',[UserController::class,'create']);
Route::get('allshow',[UserController::class,'index']);
Route::get('show/{id}',[UserController::class,'show']);
Route::get('edit/{id}',[UserController::class,'edit']);
Route::get('delete/{id}',[UserController::class,'delete']);

