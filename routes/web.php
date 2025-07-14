<?php

use App\Http\Controllers\Admin\AboutUsPageController;
use App\Http\Controllers\Admin\MainPageController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\OurTeamPageController;
use App\Http\Controllers\Admin\ParamController;
use App\Http\Controllers\MainController;
use App\Http\Middleware\AuthMiddleware;
use App\Http\Middleware\LoginHandleMiddleware;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware(AuthMiddleware::class)->group(function () {
    Route::get('/', [MainPageController::class, 'edit']);

    Route::get(MainPageController::ROUTE_SEGMENT.'/{main_page}/edit', [MainPageController::class, 'edit'])->name('main_page.edit');
    Route::post(MainPageController::ROUTE_SEGMENT.'/{main_page}', [MainPageController::class, 'update'])->name('main_page.update');

    Route::resource(AboutUsPageController::ROUTE_SEGMENT, AboutUsPageController::class)->names([
        'edit' => AboutUsPageController::ROUTE_SEGMENT . '.edit',
        'update' => AboutUsPageController::ROUTE_SEGMENT . '.update',
    ]);

    Route::resource(OurTeamPageController::ROUTE_SEGMENT, OurTeamPageController::class)->names([
        'edit' => OurTeamPageController::ROUTE_SEGMENT . '.edit',
        'update' => OurTeamPageController::ROUTE_SEGMENT . '.update',
    ]);

    Route::resource(ParamController::ROUTE_SEGMENT, ParamController::class)->names([
        'index' => ParamController::ROUTE_SEGMENT . '.index',
        'create' => ParamController::ROUTE_SEGMENT . '.create',
        'store' => ParamController::ROUTE_SEGMENT . '.store',
        'edit' => ParamController::ROUTE_SEGMENT . '.edit',
        'update' => ParamController::ROUTE_SEGMENT . '.update',
        'destroy' => ParamController::ROUTE_SEGMENT . '.destroy',
    ]);
    Route::resource(MessageController::ROUTE_SEGMENT, MessageController::class)->names([
        'index' => MessageController::ROUTE_SEGMENT . '.index',
        'edit' => MessageController::ROUTE_SEGMENT . '.edit',
        'destroy' => MessageController::ROUTE_SEGMENT . '.destroy',
    ]);
});

Route::get('/login',[MainController::class,'login'])->name('login');
Route::post('/login',[MainController::class,'logInAttempt']);
Route::post('/logout',[MainController::class,'logout'])->name('logout');

Route::get('/', [MainController::class, 'index'])->name('main');
Route::get('/about-us', [MainController::class, 'aboutUs']);
Route::get('/team', [MainController::class, 'team']);
Route::get('/pricing', [MainController::class, 'pricing']);
Route::get('/landing', [MainController::class, 'landing']);

Route::post('/write-message',[MainController::class, 'writeMessage']);
