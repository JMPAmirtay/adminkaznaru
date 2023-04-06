<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
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

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('/', [AdminController::class, 'index'])->name('layouts.admin');

    Route::group(['namespace' => 'Navbar', 'prefix' => 'navbar'], function () {
        Route::get('/', [AdminController::class, 'navbar'])->name('admin.navbar');
        Route::get('/create', [AdminController::class, 'navbar_create'])->name('navbar.create');
        Route::post('/', [AdminController::class, 'navbar_store'])->name('navbar.store');
        Route::get('/{navbar}/edit', [AdminController::class, 'navbar_edit'])->name('navbar.edit');
        Route::patch('/{navbar}', [AdminController::class, 'navbar_update'])->name('navbar.update');
        Route::delete('/{navbar}', [AdminController::class, 'navbar_destroy'])->name('navbar.delete');
    });

    Route::group(['namespace' => 'Dropdown', 'prefix' => 'dropdowns'], function () {
        Route::get('/{navbar}/create', [AdminController::class, 'dropdown_create'])->name('dropdown.create');
        Route::post('/', [AdminController::class, 'dropdown_store'])->name('dropdown.store');
        Route::get('/{dropdown}/edit', [AdminController::class, 'dropdown_edit'])->name('dropdown.edit');
        Route::patch('/{dropdown}', [AdminController::class, 'dropdown_update'])->name('dropdown.update');
        Route::delete('/{dropdown}', [AdminController::class, 'dropdown_destroy'])->name('dropdown.delete');
    });

    Route::group(['namespace' => 'News', 'prefix' => 'news'],function () {
        Route::get('/', [AdminController::class, 'news'])->name('admin.news');
        Route::get('/create', [AdminController::class, 'news_create'])->name('news.create');
        Route::get('/{news}/edit', [AdminController::class, 'news_edit'])->name('news.edit');
        Route::post('/', [AdminController::class, 'news_store'])->name('news.store');
        Route::patch('/{news}', [AdminController::class, 'news_update'])->name('news.update');
        Route::delete('/{news}', [AdminController::class, 'news_destroy'])->name('news.delete');
    });

    Route::group(['namespace' => 'Slider', 'prefix' => 'slider'], function () {
        Route::get('/', [AdminController::class, 'slider'])->name('admin.slider');
        Route::get('/first/{slide}/edit', [AdminController::class, 'slider_first_edit'])->name('slider.first.edit');
        Route::patch('/first/{slide}', [AdminController::class, 'slider_first_update'])->name('slider.first.update');
        Route::get('/second/{slide}/edit', [AdminController::class, 'slider_second_edit'])->name('slider.second.edit');
        Route::patch('/second/{slide}', [AdminController::class, 'slider_second_update'])->name('slider.second.update');
    });
});

Route::get('/', [MainController::class, 'index'])->name('layouts.app');


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
