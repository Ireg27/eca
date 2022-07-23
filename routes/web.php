<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Commercial/Website', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->name('landpage');

Route::get('/team', function () {
    return Inertia::render('Commercial/Team');
})->name('pages.team');

Route::get('/faq', function () {
    return Inertia::render('Commercial/Faq');
})->name('pages.faq');

Route::get('/about', function () {
    return Inertia::render('Commercial/About');
})->name('pages.about');

Route::get('/contact', function () {
    return Inertia::render('Commercial/Contact');
})->name('pages.contact');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admin/dashboard', function () {
    return Inertia::render('AdminPanel/Dashboard');
})->middleware(['auth', 'verified'])->name('adminpanel.dashboard');

require __DIR__.'/auth.php';
