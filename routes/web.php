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
    Route::get('/', [ProjectController::class, 'adminIndex'])->name('admin.index');

    // Form tambah data
    Route::get('/create', [ProjectController::class, 'create'])->name('admin.create');

    // Simpan data
    Route::post('/store', [ProjectController::class, 'store'])->name('admin.store');

    // Form edit data
    Route::get('/edit/{id}', [ProjectController::class, 'edit'])->name('admin.edit');

    // Update data
    Route::post('/update/{id}', [ProjectController::class, 'update'])->name('admin.update');

    // Menghapus data
    Route::delete('/delete/{id}', [ProjectController::class, 'delete'])->name('admin.delete');
});
