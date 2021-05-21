<?php

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
    return view('welcome');
});
Route::prefix('admin')->group(function () {
    Route::get('/', [App\Http\Controllers\BE_Controller\HomeController::class,'index'])->name('admin.dasboard');
    Route::resource('nhom-tin', App\Http\Controllers\BE_Controller\GroupPostController::class);
});

Route::get('/dang-ky', [App\Http\Controllers\Auth\AuthController::class,'register'])->name('auth.register');
Route::get('/dang-nhap', [App\Http\Controllers\Auth\AuthController::class,'login'])->name('auth.login');
Route::post('/create', [App\Http\Controllers\Auth\AuthController::class,'create'])->name('auth.create');
