<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsletterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Homepage
Route::get('/', [HomeController::class, 'index'])->name('home');

// Newsletter subscription
Route::post('/newsletter/subscribe', [NewsletterController::class, 'subscribe'])
    ->name('newsletter.subscribe');

// Future routes for additional pages
/*
Route::get('/prodotti', [ProductController::class, 'index'])->name('products.index');
Route::get('/prodotti/{slug}', [ProductController::class, 'show'])->name('products.show');
Route::get('/chi-siamo', [PageController::class, 'about'])->name('about');
Route::get('/contatti', [PageController::class, 'contact'])->name('contact');
Route::post('/contatti', [PageController::class, 'contactSubmit'])->name('contact.submit');
*/