<?php

use App\Http\Controllers\Auth\AuthController;
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

Route::get('/', function () {
    return view('landing-page');
});

Route::get('/register-user',[AuthController::class,'register']);
Route::post('/register-user',[AuthController::class,'storeRegister'])->name('registerAccount');
Route::get('/login',[AuthController::class,'login']);
Route::post('/login',[AuthController::class,'loginStore'])->name('loginStore');
Route::get('/logout',[AuthController::class,'logout']);


Route::get('/dashboard-user',[AuthController::class,'dashUser']);
Route::get('/dashboard-admin',[AuthController::class,'dashAdmin']);
