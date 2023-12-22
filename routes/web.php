<?php

use App\Http\Controllers\ContactController;
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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('products', function () {
    return view('products');
})->name('products');

Route::get('solutions', function () {
    return view('solutions');
})->name('solutions');

Route::get('services', function () {
    return view('services');
})->name('services');

Route::get('customers', function () {
    return view('customers');
})->name('customers');

Route::get('contact-us', function () {
    return view('contact-us');
})->name('contact-us');

Route::get('privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');

Route::post('contact', [ContactController::class, 'store'])->name('contact.store');

Route::any('{any}', function () {
    return view('404');
})->where('any', '.*');