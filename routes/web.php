<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddPunController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminLoginFormController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\LogoutController;

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


Route::get('/', DashboardController::class);

Route::post('/addPun', AddPunController::class);

Route::get('/admin', AdminController::class)->middleware('auth')->name('admin');
Route::post('/admin', AdminController::class)->middleware('auth');

Route::get('/adminLogin', AdminLoginFormController::class)->name('login')->middleware('guest');

Route::post('/adminLogin', AdminLoginController::class);

Route::post('/logout', LogoutController::class);