<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendudukController;

Route::get('/', function () {
    return redirect()->route('penduduk.index');
});

Route::get('/penduduk', [PendudukController::class, 'index'])->name('penduduk.index');
Route::get('/penduduk/export/csv', [PendudukController::class, 'exportCSV'])->name('penduduk.export.csv');
Route::get('/penduduk/export/excel', [PendudukController::class, 'exportExcel'])->name('penduduk.export.excel');