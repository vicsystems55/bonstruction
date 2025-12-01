<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/privacy-policy', [PageController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('/terms', [PageController::class, 'terms'])->name('terms');
Route::get('/projects', [PageController::class, 'projects'])->name('projects');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/csr', [PageController::class, 'csr'])->name('csr');
Route::get('/careers', [PageController::class, 'careers'])->name('careers');
Route::get('/careers', [PageController::class, 'careers'])->name('careers');
Route::get('/sectors', [PageController::class, 'sectors'])->name('sectors');



