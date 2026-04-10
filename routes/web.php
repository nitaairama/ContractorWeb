<?php

use App\Http\Controllers\ProjectController;

// Route publik
Route::get('/', [ProjectController::class, 'index'])->name('home');
Route::get('/about', [ProjectController::class, 'about'])->name('about');
Route::get('/project', [ProjectController::class, 'project'])->name('project.index');
Route::get('/project_detail/{id}', [ProjectController::class, 'detail'])->name('project.detail');
Route::get('/contact', [ProjectController::class, 'contact'])->name('contact');

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
