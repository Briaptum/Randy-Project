<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\BoysHouseController;
use App\Http\Controllers\GirlsHouseController;
use App\Http\Controllers\WolFamilyController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [IndexController::class, 'index'])->name('index.index');
Route::get('/boys-house', [BoysHouseController::class, 'index'])->name('boys-house.index');
Route::get('/girls-house', [GirlsHouseController::class, 'index'])->name('girls-house.index');
Route::get('/wol-family', [WolFamilyController::class, 'index'])->name('wol-family.index');