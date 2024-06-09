<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TestimoniController;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group([
    'middleware' => 'api',
    'prefix' =>  'auth'
], function() {

    Route::post('admin', [AuthController::class, 'login']);
    Route::post('register', [AuthController::class, 'register']);
    
    Route::post('logout', [AuthController::class, 'logout']);
});

Route::group([
    'middleware' => 'api',
], function(){
    Route::resources([
        'categories' => CategoryController::class,
        'subcategories' => SubCategoryController::class,
        'sliders' => SliderController::class,
        'products' => ProductController::class,
        'members' => MemberController::class,
        'testimonis' => TestimoniController::class,
        'reviews' => ReviewController::class,
        'oders' => OrderController::class
    ]);

    Route::get('oder/dikonfirmasi', [OrderController::class, 'dikonfirmasi']);
    Route::get('oder/dikemas', [OrderController::class, 'dikemas']);
    Route::get('oder/dikirim', [OrderController::class, 'dikirim']);
    Route::get('oder/diterima', [OrderController::class, 'diterima']);
    Route::get('oder/selesai', [OrderController::class, 'selesai']);
    Route::post('oder/ubah_status/{order}', [OrderController::class, 'ubah_status']);
    //Route::get('reports', [ReportController::class, 'indexx']);
});