<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PermohonanController;
use App\Http\Controllers\AdminController;
use Database\Seeders\AdminSeeder;

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

Route::get('/register-user',[AuthController::class,'register'])->middleware('guest');
Route::post('/register-user',[AuthController::class,'storeRegister'])->name('registerAccount');
Route::get('/login',[AuthController::class,'login'])->name('login')->middleware('guest');
Route::post('/login',[AuthController::class,'loginStore'])->name('loginStore');
Route::get('/logout',[AuthController::class,'logout']);


//admin
Route::get('/dashboard-admin' , [AdminController::class,'pengajuan'])->middleware('auth');
Route::get('/detail-permohonan/{nik}',[AdminController::class,'indexPermohonan'])->name('detail')->middleware('auth');
Route::post('/approve',[AdminController::class,'approve'])->name('approve');
Route::post('/disapprove',[AdminController::class,'disapprove'])->name('disapprove');
Route::get('/cetak/{nik}',[AdminController::class,'cetak']);
Route::post('/insert-foto',[AdminController::class,'insert']);
Route::get('/cetak-paspor',[AdminController::class,'cetakPass']);

//user
Route::get('/pengajuan',[PermohonanController::class,'index'])->middleware('auth');
Route::get('/upload',[PermohonanController::class,'uploadDokumen'])->middleware('auth');
Route::post('/upload-doc',[PermohonanController::class,'upload'])->name('uploadDoc');
Route::post('/pengajuan',[PermohonanController::class,'storePermohonan'])->name('uploadPermohonan');
Route::get('/table-pengajuan',[PermohonanController::class,'tablePermohonan'])->name('dash-user')->middleware('auth');
