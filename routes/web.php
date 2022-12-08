<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;

Route::get('/', [WebsiteController::class, 'index'])->name('home');
Route::get('/terrenos', [WebsiteController::class, 'specs'])->name('specs');
// we need to add a route for the contact form
Route::post('/contacto', [WebsiteController::class, 'contact'])->name('contact');