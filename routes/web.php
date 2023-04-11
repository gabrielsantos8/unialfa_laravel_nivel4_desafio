<?php

use App\Http\Controllers\LinkController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [LinkController::class, 'index'])->name('links.index');
Route::get('/create', [LinkController::class, 'create'])->name('links.create');
Route::get('/encurtar/{link_encurtado}', [LinkController::class, 'redirect'])->name('links.redirect');
Route::get('/edit/{id}', [LinkController::class, 'edit'])->name('links.edit');
Route::post('/store', [LinkController::class, 'store'])->name('links.store');
Route::delete('/links/{id}', [LinkController::class, 'destroy'])->name('links.destroy');
Route::put('/links/{id}', [LinkController::class, 'update'])->name('links.update');
