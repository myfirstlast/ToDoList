<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/index', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/work', [HomeController::class, 'work']);

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::post('/', [HomeController::class, 'store'])->name('store');
Route::delete('/{todolist:id}', [HomeController::class, 'destroy'])->name('destroy');
Route::get('/', [HomeController::class, 'edit'])->name('edit');

Route::get('/edit', function () {
    return 'Hello World';
});