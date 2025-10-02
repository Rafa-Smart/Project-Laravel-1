<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CookieAja;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Route::get('/', function () {
//     return Inertia::render('welcome');
// })->name('home');

// Route::get('/test', function () {
//     return (new HomeController())->index();
// });

Route::get('/test', [HomeController::class, 'index']);

Route::get('/', [BukuController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::post('/buku', [BukuController::class, 'store']);
Route::get('/data', [BukuController::class, 'index']);


Route::get('/data/create', [BukuController::class, 'tampilCreate']);


Route::get('/buku/{id}/edit', [BukuController::class, 'edit'])->name('buku.edit');
Route::put('/buku/{id}', [BukuController::class, 'update'])->name('buku.update');


Route::delete('/buku/{id}', [BukuController::class, 'destroy'])->name('buku.destroy');



// buat test aja ini mah
Route::get("/cookie/set",[CookieAja::class,"setCookie"]);
Route::get("/cookie/get",[CookieAja::class,"getCookie"]);
Route::get("/cookie/clear",[CookieAja::class,"hapusCookie"]);

// Route::get('/perpus', [BukuController::class, 'index'])->name('perpus');