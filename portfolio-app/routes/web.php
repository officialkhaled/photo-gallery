<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

/* Route::get('/home', function () {
    return view('portfolio');
}); */

Route::get('/', [PortfolioController::class, 'index'])->name('home');

Route::get('/about', [PortfolioController::class, 'about'])->name('about');


Route::get('/contact', [PortfolioController::class, 'contactPage'])->name('contact');
Route::post('/contact/create', [PortfolioController::class, 'create'])->name('create-contact');
