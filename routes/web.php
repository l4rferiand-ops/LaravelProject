<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\StudentsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/layout', function () {
    return view('layout');
});

Route::get('/admin/dashboard', function () {
    $title = 'Dashboard Admin';
    $content = 'Selamat datang di halaman dashboard admin.';

    return view('admin.dashboard', compact('title', 'content'));
})->name('admin.dashboard');

Route::get('/admin/about', [AboutController::class, 'index'])->name('admin.about');

// Memanggil StudentsController method index
Route::get('/admin/students', [StudentsController::class, 'index'])->name('admin.students');
