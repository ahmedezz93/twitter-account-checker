<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

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

// AuthController


Route::group(['middleware'=>'auth:web'],function(){

    Route::get('/home',[AuthController::class,'index'])->name('home');


});
Route::post('login_user',[AuthController::class,'loginUser'])->name('login_user');
Route::post('register',[AuthController::class,'registerUser'])->name('register_user');

Route::get('/',[AuthController::class,'login'])->name('login');
Route::get('register',[AuthController::class,'register'])->name('register');
