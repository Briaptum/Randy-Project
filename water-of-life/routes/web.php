<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\BoysHouseController;
use App\Http\Controllers\GirlsHouseController;
use App\Http\Controllers\WolFamilyController;
use App\Http\Controllers\COHController;
use App\Http\Controllers\CcppController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\WhoWeAreController;
use App\Http\Controllers\MinistriesController;
use App\Http\Controllers\HelpController;
use App\Http\Controllers\WWAController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HTHController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DonateController;
Route::get('/', function () {
    return redirect('/index');
});

Route::get('/index', [IndexController::class, 'index'])->name('index.index');
Route::get('/boys-house', [BoysHouseController::class, 'index'])->name('boys-house.index');
Route::get('/girls-house', [GirlsHouseController::class, 'index'])->name('girls-house.index');
Route::get('/wol-family', [WolFamilyController::class, 'index'])->name('wol-family.index');
Route::get('/coh', [COHController::class, 'index'])->name('coh.index');
Route::get('/ccpp', [CcppController::class, 'index'])->name('ccpp.index');
Route::get('/about', [AboutController::class, 'index'])->name('about.index');
Route::get('/ministries', [MinistriesController::class, 'index'])->name('ministries.index');
Route::get('/who-we-are', [WWAController::class, 'index'])->name('who-we-are.index');
Route::get('/help', [HelpController::class, 'index'])->name('help.index');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/how-to-help', [HTHController::class, 'index'])->name('how-to-help.index');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
Route::delete('/dashboard/contacts/{contact}', [DashboardController::class, 'destroy'])->name('dashboard.destroy');
Route::post('/dashboard/help', [DashboardController::class, 'storeHelpItem'])->name('dashboard.help.store');
Route::delete('/dashboard/help/{helpItem}', [DashboardController::class, 'destroyHelpItem'])->name('dashboard.help.destroy');
Route::get('/help/donate', [DonateController::class, 'index'])->name('donate.index');
