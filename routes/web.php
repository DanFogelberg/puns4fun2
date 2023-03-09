<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\addPunController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\adminLoginFormController;
use App\Http\Controllers\adminLoginController;
use App\Http\Controllers\logoutController;

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


Route::get('/', dashboardController::class);

Route::post('/addPun', addPunController::class);

Route::get('/admin', adminController::class)->middleware('auth')->name('admin');
Route::post('/admin', adminController::class)->middleware('auth');

Route::get('/adminLogin', adminLoginFormController::class)->name('login')->middleware('guest');

Route::post('/adminLogin', adminLoginController::class);

Route::post('/logout', logoutController::class);