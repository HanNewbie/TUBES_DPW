<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\Admin\CarController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::prefix('/admin')->middleware('auth')->group(function() { // Mengatur rute untuk admin dengan middleware auth
    Route::get('/', function () { // Mengatur rute untuk halaman dashboard admin
        return view('admin.dashboard'); // Menampilkan view admin.dashboard
    });
    Route::resource('cars', CarController::class);
    Route::resource('cars', ProductController::class);
});



Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('homepage');
Route::get('contact', [\App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('detail', [\App\Http\Controllers\HomeController::class, 'detail'])->name('detail');

Route::get('admin/dashboard',[App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard.index')->middleware('is_admin');
Route::resource('admin/cars', \App\Http\Controllers\Admin\CarController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
