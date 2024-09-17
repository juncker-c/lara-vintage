<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

Route::prefix('/administration')->name('admin.')->group(function () {
    Route::get('', \App\Http\Controllers\Admin\IndexController::class)->name('index');

    Route::prefix('/categories')->name('category.')->group(function () {
        Route::get('/', \App\Http\Controllers\Admin\Category\IndexController::class)->name('index');
        Route::get('/creation', \App\Http\Controllers\Admin\Category\CreateController::class)->name('create');
        Route::post('/creation', \App\Http\Controllers\Admin\Category\StoreController::class)->name('store');
    });
    Route::prefix('/sous-categories')->name('sub-category.')->group(function () {
        Route::get('/', \App\Http\Controllers\Admin\SubCategory\IndexController::class)->name('index');
    });
});

Route::get('/', function () {
    return view('welcome');
});
