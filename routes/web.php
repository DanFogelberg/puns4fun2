<?php

use App\Http\Controllers\showPunsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\addPunController;

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

Route::get('/', showPunsController::class);



Route::get('/addPun', addPunController::class);
Route::post('/addPun', addPunController::class);