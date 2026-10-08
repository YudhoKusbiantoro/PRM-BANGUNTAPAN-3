<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'index'])->name('home');
Route::get('/susunan-pengurus', [PublicController::class, 'susunanPengurus'])->name('susunan-pengurus');
Route::get('/amal-usaha/{slug}', [PublicController::class, 'showAum'])->name('aum.show');
Route::get('/informasi/{slug}', [PublicController::class, 'showPost'])->name('post.show');
Route::get('/agenda/{id}', [PublicController::class, 'showAgenda'])->name('agenda.show');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    // Bank Dokumen / File Sharing (Accessible by all logged-in members)
    Route::get('/dashboard/documents', [\App\Http\Controllers\DocumentController::class, 'index'])->name('documents.index');
    Route::get('/dashboard/documents/{document}/download', [\App\Http\Controllers\DocumentController::class, 'download'])->name('documents.download');

    // Detail Views (Accessible by all logged-in members)
    Route::get('dashboard/posts/{post}', [PostController::class, 'show'])->name('posts.show');
    Route::get('dashboard/agendas/{agenda}', [\App\Http\Controllers\AgendaController::class, 'show'])->name('agendas.show');
    Route::get('dashboard/programs/{program}', [\App\Http\Controllers\ProgramController::class, 'show'])->name('programs.show');

    Route::middleware('can:pengurus')->group(function () {
        Route::resource('dashboard/posts', PostController::class)->except(['show']);
        Route::resource('dashboard/aums', \App\Http\Controllers\AumController::class);
        Route::resource('dashboard/galleries', \App\Http\Controllers\GalleryController::class);
        
        // New Features for Pengurus
        Route::resource('dashboard/agendas', \App\Http\Controllers\AgendaController::class)->except(['show']);
        Route::resource('dashboard/documents', \App\Http\Controllers\DocumentController::class)->except(['index', 'show']);
        Route::resource('dashboard/programs', \App\Http\Controllers\ProgramController::class)->except(['show']);
    });

    Route::middleware('can:admin')->group(function () {
        Route::resource('dashboard/users', UserController::class)->except(['show']);
        Route::post('dashboard/divisions/reorder', [\App\Http\Controllers\DivisionController::class, 'reorder'])->name('divisions.reorder');
        Route::resource('dashboard/divisions', \App\Http\Controllers\DivisionController::class);
        Route::post('dashboard/penguruses/reorder', [\App\Http\Controllers\PengurusController::class, 'reorder'])->name('penguruses.reorder');
        Route::resource('dashboard/penguruses', \App\Http\Controllers\PengurusController::class);
        Route::resource('dashboard/categories', \App\Http\Controllers\CategoryController::class);
        Route::get('dashboard/settings', [\App\Http\Controllers\SettingController::class, 'index'])->name('settings.index');
        Route::put('dashboard/settings', [\App\Http\Controllers\SettingController::class, 'update'])->name('settings.update');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
