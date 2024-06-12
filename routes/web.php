<?php

use App\Http\Controllers\contactController;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

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

// Route::get('home',[HomeController::class,'index']);
// Route::get('contact',[contactController::class,'contact']);

// Route::get('create',[UserController::class,'create']);
// Route::get('allshow',[UserController::class,'index']);
// Route::get('show/{id}',[UserController::class,'show']);
// Route::get('edit/{id}',[UserController::class,'edit']);
// Route::get('delete/{id}',[UserController::class,'delete'])


// Route::get('create-user',[UserController::class,'create']);
// Route::post('add-user',[UserController::class,'store']);
// Route::put('add-user',[UserController::class,'update']);
// Route::patch('add-user',[UserController::class,'updatename']);
// Route::delete('add-user',[UserController::class,'delete']);
// Route::get('user/{id?}',[UserController::class,'user']);


Route::get('customer-info',[CustomerController::class,'customer']);


Route::get('create',function(){
    $data = [
        'title' => 'mango',
        'user_id' => 4,
        'description' => 'i am description',
        'status' => true
    ];

    Post::create($data);
});









