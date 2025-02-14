<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;
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

// auth
Route::get('login', [AuthController::class,'index'])->name('login');
Route::post('login', [AuthController::class,'login']);
Route::get('logout', [AuthController::class,'logout']);

// kategori
Route ::get('/kategori',[CategoryController::class, 'list']);

Route::get('/dashboard', [DashboardController::class,'index']);
