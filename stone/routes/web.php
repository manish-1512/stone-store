<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('website.index');
})->name('home');

Route::get('/about', function () {  return view('website.about');})->name('about');
Route::get('/contact', function () {  return view('website.contact');})->name('contact');
Route::get('/terms-conditions', function () {  return view('website.terms-conditions');})->name('terms-conditions');
Route::get('/privacy-policy', function () {  return view('website.privacy-policy');})->name('privacy-policy');

Route::get('/ring-designs', function () {  return view('website.ring-designs');})->name('ring-designs');
Route::get('/pendant-designs', function () {  return view('website.pendant-designs');})->name('pendant-designs');

Route::get('/pendant-designs', function () {  return view('website.pendant-designs');})->name('pendant-designs');
Route::get('/products', function () {  return view('website.shop');})->name('products');
Route::get('/category-page', function () {  return view('website.categories');})->name('category-page');

Route::get('/login', function () {  return view('website.login');})->name('login');

Route::get('/register', function () {  return view('website.login');})->name('register');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
