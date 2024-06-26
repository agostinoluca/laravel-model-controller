<?php

use App\Http\Controllers\Guest\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PageController::class, 'index'])->name('welcome');

Route::get('/about', [PageController::class, 'about'])->name('about');

Route::get('/contacts', [PageController::class, 'contacts'])->name('contacts');

Route::get('/bestmovies', [PageController::class, 'bestmovies'])->name('bestmovies');

Route::get('/americanmovies', [PageController::class, 'americanmovies'])->name('americanmovies');

Route::get('/britishmovies', [PageController::class, 'britishmovies'])->name('britishmovies');
