<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\ContactController;

// Home route - displays the main application page
Route::get('/', [AppController::class, 'index'])->name('home');

// Contact routes
Route::get('/contact', function () {
    return view('contact'); // Displays the contact form
})->name('contact.form');

Route::post('/contact', [ContactController::class, 'store'])->name('contacts.store'); // Handles form submission

