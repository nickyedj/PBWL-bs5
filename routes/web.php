<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibController;

Route::get('/',[LibController::class, 'index'])->name('books');
Route::get('form',[LibController::class, 'form'])->name('books.form');
Route::post('store',[LibController::class,'store'])->name('books.store');
