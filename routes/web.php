<?php

use App\Http\Controllers\DropdownController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SecondSlideController;
use App\Http\Controllers\SlideController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::group(['prefix' => 'admin', 'controller' => 'App\Http\Controllers\AdminController'], function () {
    Route::get('/', 'index')->name('layouts.admin');

    Route::resource('navbar', NavbarController::class)->names(['index' => 'admin.navbar',]);

    Route::resource('navbar.dropdown', DropdownController::class)->shallow();

    Route::resource('news', NewsController::class)->names(['index' => 'admin.news']);

    Route::resource('slider', SlideController::class)->names(['index' => 'admin.slider'])->only([
        'index', 'edit', 'update']);

    Route::resource('slider.second', SecondSlideController::class)->only(['edit', 'update'])->shallow();
});

Route::get('/', [MainController::class, 'index'])->name('layouts.app');


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
