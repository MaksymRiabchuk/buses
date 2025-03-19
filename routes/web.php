<?php

use App\Http\Controllers\Admin\ParamController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    Route::get('/', [ParamController::class, 'index']);
    Route::get('/param/index', [ParamController::class, 'index'])->name('param.index');
    Route::get('/param/create', [ParamController::class, 'index'])->name('param.create');
    Route::post('/param/create', [ParamController::class, 'index'])->name('param.create');
});

Route::get('/', [MainController::class, 'index']);
