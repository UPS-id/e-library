<?php

use App\Http\Controllers\HallController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage', ['title' => 'Homepage']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::prefix('dashboard')->middleware('auth', 'isAdmin')->group(function () {
    Route::get('/', function () {
        return view('dashboard.dashboard', ['title' => 'Dashboard']);
    });
});

Route::get('/dashboard', function () {
    return view('dashboard.dashboard', ['title' => 'Dashboard']);
})->middleware(['auth', 'isAdmin']);

Route::get('/hall', [HallController::class, 'index']);
Route::get('/hall/book/{book:slug}', [HallController::class, 'GetByBook']);
Route::get('/hall/author/{author:slug}', [HallController::class, 'GetByAuthor']);
Route::get('/hall/category/{category:slug}', [HallController::class, 'GetByCategory']);

Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');

Route::get('/register', [LoginController::class, 'register'])->middleware('guest');
Route::post('/register', [LoginController::class, 'store'])->middleware('guest');

Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

Route::get('/', [HomeController::class, 'index']);
