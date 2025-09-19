<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Route::get('/', function () {
//     return Inertia::render('welcome');
// })->name('home');

// Route::get('/test', function () {
//     return (new HomeController())->index();
// });

Route::get('/test', [HomeController::class, 'index']);

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::post('/buku', [BukuController::class, 'store']);
Route::get('/buku', [BukuController::class, 'index']);


