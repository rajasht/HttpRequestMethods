<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('login','user');
// Route::delete('usrdelete',[UserController::class,'testHttpRequest']);

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


Route::get('loginuser',[UserController::class,'testHttpRequest']);
// Route::post('usrpost',[UserController::class,'testHttpRequest']);
// Route::put('usrput',[UserController::class,'testHttpRequest']);
