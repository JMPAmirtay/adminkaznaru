<?php

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

Route::group(['prefix' => 'admin', 'middleware' => ['admin', 'auth'], 'controller' => 'App\Http\Controllers\AdminController'], function () {
    Route::get('/', 'index')->name('layouts.admin');

    Route::get('navbar/', 'navbar')->name('admin.navbar');
    Route::group(['prefix' => 'navbar', 'as' => 'navbar.'], function () {
        Route::get('/create', 'navbar_create')->name('create');
        Route::post('/', 'navbar_store')->name('store');
        Route::get('/{navbar}/edit', 'navbar_edit')->name('edit');
        Route::patch('/{navbar}', 'navbar_update')->name('update');
        Route::delete('/{navbar}', 'navbar_destroy')->name('delete');
    });

    Route::group(['prefix' => 'dropdowns', 'as' => 'dropdown.'], function () {
        Route::get('/{navbar}/create', 'dropdown_create')->name('create');
        Route::post('/', 'dropdown_store')->name('store');
        Route::get('/{dropdown}/edit', 'dropdown_edit')->name('edit');
        Route::patch('/{dropdown}', 'dropdown_update')->name('update');
        Route::delete('/{dropdown}', 'dropdown_destroy')->name('delete');
    });

    Route::get('news/', 'news')->name('admin.news');
    Route::group(['prefix' => 'news', 'as' => 'news.'], function () {
        Route::get('/create', 'news_create')->name('create');
        Route::get('/{news}/edit', 'news_edit')->name('edit');
        Route::post('/', 'news_store')->name('store');
        Route::patch('/{news}', 'news_update')->name('update');
        Route::delete('/{news}', 'news_destroy')->name('delete');
    });
    Route::get('slider/', 'slider')->name('admin.slider');
    Route::group(['prefix' => 'slider' , 'as' => 'slider.'], function () {
        Route::group(['prefix' => 'first' , 'as' => 'first.'], function () {
            Route::get('/{slide}/edit', 'slider_first_edit')->name('edit');
            Route::patch('/{slide}', 'slider_first_update')->name('update');
        });
        Route::group(['prefix' => 'second' , 'as' => 'second.'], function () {
            Route::get('/second/{slide}/edit', 'slider_second_edit')->name('edit');
            Route::patch('/second/{slide}', 'slider_second_update')->name('update');
        });
    });
});

Route::get('/', [MainController::class, 'index'])->name('layouts.app');


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
