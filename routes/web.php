<?php

use App\Http\Controllers\Admin\AboutUsPageController;
use App\Http\Controllers\Admin\MainPageController;
use App\Http\Controllers\Admin\ParamController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    Route::get('/', [\App\Http\Controllers\Admin\MainPageController::class, 'edit']);


    Route::resource(MainPageController::ROUTE_SEGMENT, MainPageController::class)->names([
        'edit' => MainPageController::ROUTE_SEGMENT . '.edit',
        'update' => MainPageController::ROUTE_SEGMENT . '.update',
    ]);
    Route::resource(AboutUsPageController::ROUTE_SEGMENT, AboutUsPageController::class)->names([
        'edit' => AboutUsPageController::ROUTE_SEGMENT . '.edit',
        'update' => AboutUsPageController::ROUTE_SEGMENT . '.update',
    ]);

    Route::resource(ParamController::ROUTE_SEGMENT, ParamController::class)->names([
        'index' => ParamController::ROUTE_SEGMENT . '.index',
        'create' => ParamController::ROUTE_SEGMENT . '.create',
        'store' => ParamController::ROUTE_SEGMENT . '.store',
        'edit' => ParamController::ROUTE_SEGMENT . '.edit',
        'update' => ParamController::ROUTE_SEGMENT . '.update',
        'destroy' => ParamController::ROUTE_SEGMENT . '.destroy',
    ]);
});

Route::get('/', [MainController::class, 'index']);
Route::get('/about-us', [MainController::class, 'aboutUs']);
Route::get('/team', [MainController::class, 'team']);
Route::get('/pricing', [MainController::class, 'pricing']);
Route::get('/landing', [MainController::class, 'landing']);
