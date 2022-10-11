<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\GoogleSocialiteController;

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

//################################################################ website  route start here #################################################################
 
 
 Route::get('/', function () {  return view('website.index');})->name('home');


Route::get('/about', function () {  return view('website.about');})->name('about');
Route::get('/contact', function () {  return view('website.contact');})->name('contact');
Route::get('/terms-conditions', function () {  return view('website.terms-conditions');})->name('terms-conditions');
Route::get('/privacy-policy', function () {  return view('website.privacy-policy');})->name('privacy-policy');

Route::get('/ring-designs', function () {  return view('website.ring-designs');})->name('ring-designs');
Route::get('/pendant-designs', function () {  return view('website.pendant-designs');})->name('pendant-designs');
Route::get('/products', function () {  return view('website.shop');})->name('products');
Route::get('/products-details', function () {  return view('website.product-details');})->name('product-details');
Route::get('/category-page', function () {  return view('website.categories');})->name('category-page');
Route::get('/cart', function () {  return view('website.cart');})->name('cart');
Route::get('/checkout', function () {  return view('website.checkout');})->name('checkout');
Route::get('/thank-you', function () {  return view('website.thankyou');})->name('thankyou');



 Route::group(['middleware'=> ['auth'] ,'namespace' => 'App\Http\Controllers'],function(){

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

 });


 
 
Route::get('auth/google', [GoogleSocialiteController::class, 'redirectToGoogle'])->name('google.login');
Route::get('callback/google', [GoogleSocialiteController::class, 'handleCallback']);





require __DIR__.'/auth.php';


################################################################ website  route end  here #################################################################

################################################################ Admin  route start here #################################################################


Route::namespace('App\Http\Controllers\Admin')->prefix('admin')->name('admin.')->group(function(){

    Route::namespace('Auth')->middleware('guest:admin')->group(function(){

        Route::get('login','AuthenticatedSessionController@create')->name('login');
        Route::post('login','AuthenticatedSessionController@store')->name('adminlogin');
    });



    Route::middleware('admin')->group(function(){
        Route::get('dashboard',function(){return view('admin.dashboard'); });
        Route::get('settings',function(){return view('admin.settings.index'); });
        
        Route::get('logout','Auth\AuthenticatedSessionController@destroy')->name('logout');
    });


});