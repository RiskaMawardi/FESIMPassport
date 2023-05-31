<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PermohonanController;
use App\Http\Controllers\AdminController;
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


//admin
Route::get('/dashboard-admin',[AuthController::class,'dashAdmin']);
Route::get('/pengajuan-index' , [AdminController::class,'pengajuan']);


//user
Route::get('/pengajuan',[PermohonanController::class,'index']);
Route::get('/upload',[PermohonanController::class,'uploadDokumen']);
Route::post('/upload-doc',[PermohonanController::class,'upload'])->name('uploadDoc');
Route::post('/pengajuan',[PermohonanController::class,'storePermohonan'])->name('uploadPermohonan');
Route::get('/table-pengajuan',[PermohonanController::class,'tablePermohonan'])->name('dash-user');
