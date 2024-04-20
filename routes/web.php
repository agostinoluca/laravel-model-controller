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

Route::get('/query1', [PageController::class, 'query1'])->name('query1');

Route::get('/query2', [PageController::class, 'query2'])->name('query2');

Route::get('/query3', [PageController::class, 'query3'])->name('query3');
