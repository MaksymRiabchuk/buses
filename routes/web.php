<?php

use App\Http\Controllers\Admin\MainPageController;
use App\Http\Controllers\Admin\ParamController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    Route::get('/', [\App\Http\Controllers\Admin\MainPageController::class, 'edit']);
//    Route::get('/param/index', [ParamController::class, 'index'])->name('param.index');
//    Route::get('/param/create', [ParamController::class, 'index'])->name('param.create');
//    Route::post('/param/create', [ParamController::class, 'index'])->name('param.create');

    Route::resource(MainPageController::ROUTE_SEGMENT, MainPageController::class)->names([
        'edit' => MainPageController::ROUTE_SEGMENT . '.edit',
        'update' => MainPageController::ROUTE_SEGMENT . '.update',
    ]);
});

Route::get('/', [MainController::class, 'index']);
Route::get('/about-us', [MainController::class, 'aboutUs']);
Route::get('/team', [MainController::class, 'team']);
Route::get('/pricing', [MainController::class, 'pricing']);
Route::get('/landing', [MainController::class, 'landing']);
