<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/services', [ContactController::class, 'services']);
Route::get('/contact_us', [ContactController::class, 'contact_us'])->name('contact_page');
Route::post('/store', [ContactController::class,'ourfilestore'])->name('filestore');
Route::get('/about', [ContactController::class, 'about']);