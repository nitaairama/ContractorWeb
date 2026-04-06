<?php

use App\Http\Controllers\ProjectController;

// Route publik
Route::get('/', [ProjectController::class, 'index']);
Route::get('/about', [ProjectController::class, 'about']);
Route::get('/project', [ProjectController::class, 'project']);
Route::get('/contact', [ProjectController::class, 'contact']);

// Route admin
Route::prefix('admin')->group(function () {
    // Tampilkan semua data
    Route::get('/portofolio', [ProjectController::class, 'adminIndex']);

    // Form tambah data
    Route::get('/portofolio/create', [ProjectController::class, 'create']);

    // Simpan data
    Route::post('/portofolio/store', [ProjectController::class, 'store']);

    // Form edit data
    Route::get('/portofolio/edit/{id}', [ProjectController::class, 'edit']);

    // Update data
    Route::post('/portofolio/update/{id}', [ProjectController::class, 'update']);

    // Menghapus data
    Route::delete('/portofolio/delete/{id}', [ProjectController::class, 'delete']);
});
