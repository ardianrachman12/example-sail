<?php

use App\Http\Controllers\KartuKeluargaController;
use App\Http\Controllers\KtpController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/kartu-keluarga');
});

Route::resource('ktp', KtpController::class);
Route::resource('kartu-keluarga', KartuKeluargaController::class);

Route::get('/fetchData', [KartuKeluargaController::class, 'fetchData'])->name('kartu-keluarga.fetchData');
Route::get('/fetchDataKtp', [KtpController::class, 'fetchData'])->name('ktp.fetchData');