<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('book', 'BookController');
Route::resource('writer', 'WriterController');
Route::resource('category', 'CategoryController');
Route::resource('editorial', 'EditorialController');
Route::resource('ticket', 'TicketController');
