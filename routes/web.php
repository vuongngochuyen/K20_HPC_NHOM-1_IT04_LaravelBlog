<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TableController;
use App\Http\Controllers\Pages\AuthenController;
use App\Http\Controllers\Pages\AccountController;
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
Route::get('/',function(){
    return view('content');
})->name('home');
Route::get('/table',[TableController::class,'index'])->name('table');

        Route::get('/Account', [AccountController::class,'account'])->name('account');
        Route::get('/Connection', [AccountController::class,'connection'])->name('connection');
        Route::get('/Notification', [AccountController::class,'notification'])->name('notification');

        Route::get('/Forgot', [AuthenController::class,'forgot'])->name('forgot');
        Route::get('/login', [AuthenController::class,'login'])->name('login');
        Route::get('/register', [AuthenController::class,'register'])->name('register');
        Route::post('/register', [AuthenController::class,'registerAdd']);
