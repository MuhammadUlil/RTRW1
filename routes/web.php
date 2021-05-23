<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RTController;
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
    return view('/welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.home')->middleware('is_admin');
Route::get('/rt', [App\Http\Controllers\RT_Controller::class, 'index'])->name('rt.home')->middleware('is_rt');
Route::get('/rw', [App\Http\Controllers\RWController::class, 'index'])->name('rw.home')->middleware('is_rw');
Route::get('sekretaris/home', [HomeController::class, 'sekretarisHome'])->name('sekretaris.home')->middleware('is_sekretaris');
Route::get('bendahara/home', [HomeController::class, 'bendaharaHome'])->name('bendahara.home')->middleware('is_bendahara');
