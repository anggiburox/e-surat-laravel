<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardAdmin;
use App\Http\Controllers\SuratAdmin;
use App\Http\Controllers\Auth;

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

Route::post('/login', [Auth::class, 'login']);
Route::get('/logout', [Auth::class, 'logout']);
Route::get('/', [Auth::class, 'index'])->name('login');
Route::get('lupa_password', [Auth::class, 'forgot']);
Route::post('/auth/lupa_password/updatelupapassword/',[Auth::class, 'updatelupapassword']);

Route::middleware(['admin'])->group(function () {
    //route admin dashboard    
    Route::get('/admin/dashboard', [DashboardAdmin::class, 'index']);

    //route admin surat
    Route::get('/admin/surat/', [SuratAdmin::class, 'index']);
    Route::get('/admin/surat/tambah', [SuratAdmin::class, 'tambah']);
    Route::post('/admin/surat/store', [SuratAdmin::class, 'store']);
    Route::get('/admin/surat/edit/{id}',[SuratAdmin::class, 'edit']);
    Route::post('/admin/surat/update',[SuratAdmin::class, 'update']);
    Route::get('/admin/surat/hapus/{id}',[SuratAdmin::class, 'hapus']);
    Route::get('/admin/surat/downloadfile/{id}',[SuratAdmin::class, 'downloadfile']);
});