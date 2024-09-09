<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DesaController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ObatIbuController;
use App\Http\Controllers\PeriksaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WarningController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KehamilanController;
use App\Http\Controllers\PuskesmasController;
use App\Http\Controllers\PeriksaIbuController;
use App\Http\Controllers\KehamlanIbuController;

Route::controller(WarningController::class)->group(function () {
    Route::get('/imt', 'index')->middleware('auth', 'admin');
    Route::get('/denyut', 'denyut')->middleware('auth', 'admin');
    Route::get('/hb', 'hb')->middleware('auth', 'admin');
});
Route::controller(ObatController::class)->group(function () {
    Route::get('/obat', 'index')->middleware('auth', 'admin');
    Route::get('/obat/add', 'create')->middleware('auth', 'admin');
    Route::post('/obat/add', 'store')->middleware('auth', 'admin');
    Route::get('/obat/view/{id}', 'show')->middleware('auth', 'admin');
    Route::get('/obat/delete/{id}', 'delete')->middleware('auth', 'admin');
    Route::delete('/obat/delete/{id}', 'destroy')->middleware('auth', 'admin');
});
Route::controller(PeriksaController::class)->group(function () {
    Route::get('/periksa', 'index')->middleware('auth', 'admin');
    Route::get('/periksa/add', 'create')->middleware('auth', 'admin');
    Route::post('/periksa/add', 'store')->middleware('auth', 'admin');
    Route::get('/periksa/view/{id}', 'show')->middleware('auth', 'admin');
    Route::get('/periksa/edit/{id}', 'edit')->middleware('auth', 'admin');
    Route::put('/periksa/edit/{id}', 'update')->middleware('auth', 'admin');
    Route::get('/periksa/delete/{id}', 'delete')->middleware('auth', 'admin');
    Route::delete('/periksa/delete/{id}', 'destroy')->middleware('auth', 'admin');
});
Route::controller(KehamilanController::class)->group(function () {
    Route::get('/kehamilan', 'index')->middleware('auth', 'admin');
    Route::get('/kehamilan/add', 'create')->middleware('auth', 'admin');
    Route::get('/kehamilan/add_id/{id}', 'create_id')->middleware('auth', 'admin');
    Route::post('/kehamilan/add', 'store')->middleware('auth', 'admin');
    Route::get('/kehamilan/view/{id}', 'show')->middleware('auth', 'admin');
    Route::get('/kehamilan/edit/{id}', 'edit')->middleware('auth', 'admin');
    Route::put('/kehamilan/edit/{id}', 'update')->middleware('auth', 'admin');
    Route::get('/kehamilan/delete/{id}', 'delete')->middleware('auth', 'admin');
    Route::delete('/kehamilan/delete/{id}', 'destroy')->middleware('auth', 'admin');
});
Route::controller(PuskesmasController::class)->group(function () {
    Route::get('/puskesmas', 'index')->middleware('auth', 'admin');
    Route::get('/puskesmas/add', 'create')->middleware('auth', 'admin');
    Route::post('/puskesmas/add', 'store')->middleware('auth', 'admin');
    Route::get('/puskesmas/view/{id}', 'show')->middleware('auth', 'admin');
    Route::get('/puskesmas/edit/{id}', 'edit')->middleware('auth', 'admin');
    Route::put('/puskesmas/edit/{id}', 'update')->middleware('auth', 'admin');
    Route::get('/puskesmas/delete/{id}', 'delete')->middleware('auth', 'admin');
    Route::delete('/puskesmas/delete/{id}', 'destroy')->middleware('auth', 'admin');
});
Route::controller(DesaController::class)->group(function () {
    Route::get('/desa', 'index')->middleware('auth', 'admin');
    Route::get('/desa/add', 'create')->middleware('auth', 'admin');
    Route::post('/desa/add', 'store')->middleware('auth', 'admin');
    Route::get('/desa/view/{id}', 'show')->middleware('auth', 'admin');
    Route::get('/desa/edit/{id}', 'edit')->middleware('auth', 'admin');
    Route::put('/desa/edit/{id}', 'update')->middleware('auth', 'admin');
    Route::get('/desa/delete/{id}', 'delete')->middleware('auth', 'admin');
    Route::delete('/desa/delete/{id}', 'destroy')->middleware('auth', 'admin');
});
Route::controller(UserController::class)->group(function () {
    Route::get('/user', 'index')->middleware('auth', 'admin');
    Route::get('/user/add', 'create')->middleware('auth', 'admin');
    Route::post('/user/add', 'store')->middleware('auth', 'admin');
    Route::get('/user/view/{id}', 'show')->middleware('auth', 'admin');
    Route::get('/user/edit/{id}', 'edit')->middleware('auth', 'admin');
    Route::put('/user/edit/{id}', 'update')->middleware('auth', 'admin');
    Route::get('/user/delete/{id}', 'delete')->middleware('auth', 'admin');
    Route::delete('/user/delete/{id}', 'destroy')->middleware('auth', 'admin');
});
Route::controller(DashboardController::class)->group(function () {
    Route::get('/dashboard', 'index')->middleware('auth');
});
Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'login')->name('login')->middleware('guest');
    Route::post('/login', 'authenticate')->middleware('guest');
    Route::get('register', 'register')->name('register')->middleware('guest');
    Route::post('register', 'authreg')->middleware('guest');
    Route::get('logout', 'logout')->middleware('auth');
});
Route::get('/', function () {
    return view('welcome');
});
Route::controller(ProfileController::class)->group(function () {
    Route::get('/profile', 'index')->middleware('auth', 'bersama');
    Route::get('/profile/edit', 'edit')->middleware('auth', 'bersama');
    Route::put('/profile/edit', 'update')->middleware('auth', 'bersama');
});
Route::controller(ObatIbuController::class)->group(function () {
    Route::get('/obat_ibu', 'index')->middleware('auth', 'member');
    Route::get('/obat_ibu/add', 'create')->middleware('auth', 'member');
    Route::post('/obat_ibu/add', 'store')->middleware('auth', 'member');
    Route::get('/obat_ibu/view/{id}', 'show')->middleware('auth', 'member');
    Route::post('/obat_ibu/view/{id}', 'jadwal')->middleware('auth', 'member');
    Route::get('/obat_ibu/delete/{id}', 'delete')->middleware('auth', 'member');
    Route::delete('/obat_ibu/delete/{id}', 'destroy')->middleware('auth', 'member');
});
Route::controller(PeriksaIbuController::class)->group(function () {
    Route::get('/periksa_ibu/add/{id}', 'create')->middleware('auth', 'member');
    Route::post('/periksa_ibu/add/{id}', 'store')->middleware('auth', 'member');
    Route::get('/periksa_ibu/view/{id}', 'show')->middleware('auth', 'member');
    Route::get('/periksa_ibu/edit/{id}', 'edit')->middleware('auth', 'member');
    Route::put('/periksa_ibu/edit/{id}', 'update')->middleware('auth', 'member');
    Route::get('/periksa_ibu/delete/{id}', 'delete')->middleware('auth', 'member');
    Route::delete('/periksa_ibu/delete/{id}', 'destroy')->middleware('auth', 'member');
});
Route::controller(KehamlanIbuController::class)->group(function () {
    Route::get('/kehamilan_ibu', 'index')->middleware('auth', 'member');
    Route::get('/kehamilan_ibu/add', 'create')->middleware('auth', 'member');
    Route::get('/kehamilan_ibu/add_id/{id}', 'create_id')->middleware('auth', 'member');
    Route::post('/kehamilan_ibu/add', 'store')->middleware('auth', 'member');
    Route::get('/kehamilan_ibu/view/{id}', 'show')->middleware('auth', 'member');
    Route::get('/kehamilan_ibu/edit/{id}', 'edit')->middleware('auth', 'member');
    Route::put('/kehamilan_ibu/edit/{id}', 'update')->middleware('auth', 'member');
    Route::get('/kehamilan_ibu/delete/{id}', 'delete')->middleware('auth', 'member');
    Route::delete('/kehamilan_ibu/delete/{id}', 'destroy')->middleware('auth', 'member');
});
