<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ManageAccessController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\RSPPController;
use App\Http\Controllers\RuhBelanjaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebSettingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('todoLogin');
});

Route::resource('general-setting', WebSettingController::class);
Route::resource('role', RoleController::class);
Route::resource('user', UserController::class);
Route::resource('rspp', RSPPController::class);

Route::resource('ruhBelanja', RuhBelanjaController::class);
Route::resource('manage-access', ManageAccessController::class);
Route::post('storeRspp/{id}', [RuhBelanjaController::class, 'storeRspp'])->name('rspp.storeRspp');
Route::post('storeKro', [RuhBelanjaController::class, 'storeKro'])->name('rspp.storeKro');
Route::post('storeRo', [RuhBelanjaController::class, 'storeRo'])->name('rspp.storeRo');
Route::post('storekomponen', [RuhBelanjaController::class, 'storekomponen'])->name('rspp.storekomponen');
Route::post('storeSubKomponen', [RuhBelanjaController::class, 'storeSubKomponen'])->name('rspp.storeSubKomponen');
Route::get('ruh-belanja/create-rspp/{id}', [RuhBelanjaController::class, 'createRspp'])->name('ruhBelanja.createRspp');

Route::get('login', [AuthController::class, 'todoLogin'])->name('todoLogin');
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
