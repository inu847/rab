<?php

use App\Http\Controllers\AkunController;
use App\Http\Controllers\AkunDetailController;
use App\Http\Controllers\AkunRuhBelanjaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\KomponenController;
use App\Http\Controllers\KROController;
use App\Http\Controllers\ManageAccessController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ROController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\RsppController;
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
Route::resource('ruhBelanja', RuhBelanjaController::class);
Route::resource('rspp', RsppController::class);
Route::resource('kegiatan', KegiatanController::class);
Route::resource('program', ProgramController::class);
Route::resource('kro', KROController::class);
Route::resource('ro', ROController::class);
Route::resource('komponen', KomponenController::class);

Route::get('ruh-belanja/insertAkun/{id}', [RuhBelanjaController::class, 'insertAkun'])->name('ruhBelanja.insertAkun');
Route::resource('akun-ruh-belanja', AkunRuhBelanjaController::class);
Route::resource('akun', AkunController::class);
Route::resource('akun-detail', AkunDetailController::class);
Route::get('akun-detail/create2/{id}', [AkunDetailController::class, 'akunDetailCreate2'])->name('akun-detail.create2');
Route::post('akun-detail/store2', [AkunDetailController::class, 'akunDetailStore2'])->name('akun-detail.store2');
Route::resource('manage-access', ManageAccessController::class);
Route::get('ruh-belanja/create-rspp/{id}', [RuhBelanjaController::class, 'createRspp'])->name('ruhBelanja.createRspp');
Route::get('ruh-belanja/export-pdf/{id}', [RuhBelanjaController::class, 'exportPdf'])->name('ruhBelanja.export');
Route::delete('ruh-belanja/delAkunRuhBelanja/{id}', [RuhBelanjaController::class, 'delAkunRuhBelanja'])->name('ruhBelanja.delAkunRuhBelanja');
Route::resource('header', HeaderController::class);
Route::post('checkHeader', [HeaderController::class, 'checkHeader'])->name('akun.checkHeader');

Route::get('login', [AuthController::class, 'todoLogin'])->name('todoLogin');
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
