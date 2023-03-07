<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\addPunController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\adminLoginFormController;
use App\Http\Controllers\adminLoginController;

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

Route::get('/admin', adminController::class);
Route::post('/admin', adminController::class);

Route::get('/adminLogin', adminLoginFormController::class);
Route::post('/adminLogin', adminLoginController::class);