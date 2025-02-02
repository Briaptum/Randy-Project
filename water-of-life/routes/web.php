<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\BoysHouseController;
use App\Http\Controllers\GirlsHouseController;
use App\Http\Controllers\WolFamilyController;
use App\Http\Controllers\COHController;
use App\Http\Controllers\CcppController;
Route::get('/', function () {
    return redirect('/index');
});

Route::get('/index', [IndexController::class, 'index'])->name('index.index');
Route::get('/boys-house', [BoysHouseController::class, 'index'])->name('boys-house.index');
Route::get('/girls-house', [GirlsHouseController::class, 'index'])->name('girls-house.index');
Route::get('/wol-family', [WolFamilyController::class, 'index'])->name('wol-family.index');
Route::get('/coh', [COHController::class, 'index'])->name('coh.index');
Route::get('/ccpp', [CcppController::class, 'index'])->name('ccpp.index');