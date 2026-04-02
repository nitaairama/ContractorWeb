<?php

use App\Http\Controllers\PortofolioController;

// Route publik
Route::get('/', [PortofolioController::class, 'index']);

// Route admin
Route::prefix('admin')->group(function () {
    // Tampilkan semua data
    Route::get('/portofolio', [PortofolioController::class, 'adminIndex']);

    // Form tambah data
    Route::get('/portofolio/create', [PortofolioController::class, 'create']);

    // Simpan data
    Route::post('/portofolio/store', [PortofolioController::class, 'store']);

    // Form edit data
    Route::get('/portofolio/edit{id}', [PortofolioController::class, 'edit']);

    // Update data
    Route::post('/portofolio/update{id}', [PortofolioController::class, 'update']);

    // Menghapus data
    Route::delete('/portofolio/delete{id}', [PortofolioController::class, 'delete']);
});
