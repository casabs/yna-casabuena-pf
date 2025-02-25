<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('portfolio')->group(function () {
    Route::get('/about', [HomeController::class, 'about'])->name('portfolio.about');
    Route::get('/certi', [HomeController::class, 'certi'])->name('portfolio.certi');
    Route::get('/project', [HomeController::class, 'project'])->name('portfolio.project');
    Route::get('/contact', [HomeController::class, 'contact'])->name('portfolio.contact');
});
