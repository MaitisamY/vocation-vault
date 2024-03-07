<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\JobListingController;
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

// AppController (Common routes)
Route::get('/', [AppController::class, 'home']);

Route::get('/home', [AppController::class, 'home'])->name('home');

Route::get('/about', [AppController::class, 'about'])->name('about');

Route::get('/contact', [AppController::class, 'contact'])->name('contact');

Route::get('/categories', [AppController::class, 'categories'])->name('categories');

Route::get('/listings', [AppController::class, 'listings'])->name('listings');

// CategoryController (Specific route with name parameter)
Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('category.show');

// JobListingController (Specific route with id parameter)
Route::get('/listings/{id}', [JobListingController::class, 'show'])->name('listing.show');


