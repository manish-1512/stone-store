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
 



Route::namespace('App\Http\Controllers\Website')->group(function(){

    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/product-category/{slug}','CategoryController@index')->name('categorypage');

    Route::get('/products/{slug}','ProductController@index')->name('products');
    Route::get('/products/{category}/{slug}','ProductController@productDetails')->name('product_details');
    
    Route::get('/about', 'HomeController@about')->name('about');
    Route::get('/contact', 'HomeController@contactUs')->name('contact');
    Route::get('/terms-conditions','HomeController@terms' )->name('terms-conditions');
    Route::get('/privacy-policy','HomeController@privacyPolicy')->name('privacy-policy');

    Route::post('available-designs','ProductController@availableDesigns')->name('product.available_designs');
    });



Route::get('/ring-designs', function () {  return view('website.ring-designs');})->name('ring-designs');
Route::get('/pendant-designs', function () {  return view('website.pendant-designs');})->name('pendant-designs');

Route::get('/products-details', function () {  return view('website.product-details');})->name('product-details');

Route::get('/cart', function () {  return view('website.cart');})->name('cart');
Route::get('/checkout', function () {  return view('website.checkout');})->name('checkout');
Route::get('/thank-you', function () {  return view('website.thankyou');})->name('thankyou');



 Route::group(['middleware'=> ['auth'] ,'namespace' => 'App\Http\Controllers','as' => 'user.'],function(){

    Route::get('/my-profile', 'Website\UserController@profile')->name('profile');
    Route::post('/my-profile', 'Website\UserController@updateProfile')->name('profile_update');

    Route::get('/change-password', 'Website\UserController@changePassword')->name('change_password');
    Route::post('/change-password', 'Website\UserController@updatePassword')->name('update_password');
    Route::get('/dashboard', 'Website\UserController@dashboard')->name('dashboard');
    Route::get('/manage-address', 'Website\UserController@manageAddress')->name('manage_address');
    Route::post('/add-new-address', 'Website\UserController@addNewAddress')->name('add_address');
    Route::get('/edit-address/{id}', 'Website\UserController@editAddress')->name('edit_address');



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

        Route::get('dashboard',function(){return view('admin.dashboard'); })->name('dashboard');
        Route::get('logout','Auth\AuthenticatedSessionController@destroy')->name('logout');

        Route::get('settings','SettingController@index')->name('settings.show');
        Route::post('settings','SettingController@update')->name('settings.update');

        Route::get('cms-pages','CmsPageController@index')->name('cms.show');

        Route::get('cms-pages/edit/{slug}','CmsPageController@edit')->name('cms.edit');
        Route::post('cms-pages/update','CmsPageController@update')->name('cms.update');


        //e-commerce group 
        Route::prefix('categories')->name('categories.')->group(function(){

        Route::get('/','CategoryController@index')->name('show');
        Route::post('/save','CategoryController@store')->name('store');
        Route::get('/edit/{id}','CategoryController@edit')->name('edit');
        Route::post('/update/{id}','CategoryController@update')->name('update');
        Route::get('/delete/{id}','CategoryController@destroy')->name('delete');

        });



        Route::prefix('product-matrial')->name('product_matrial.')->group(function(){

            Route::get('/','ProductMatrialController@index')->name('index');
            Route::post('/store','ProductMatrialController@store')->name('store');
            Route::get('/edit/{id}','ProductMatrialController@edit')->name('edit');
            Route::post('/update/{id}','ProductMatrialController@update')->name('update');
            Route::get('/delete/{id}','ProductMatrialController@destroy')->name('destroy');
            Route::get('/status/{id}','ProductMatrialController@changeStatus')->name('status');

        });

        //final product item 

        Route::prefix('final-product-item')->name('final_product_item.')->group(function(){      
            Route::get('/','FinalProductItem@index')->name('index');
            Route::post('/store','FinalProductItem@store')->name('store');
            Route::get('/edit/{id}','FinalProductItem@edit')->name('edit');
            Route::post('/update/{id}','FinalProductItem@update')->name('update');
            Route::get('/delete/{id}','FinalProductItem@destroy')->name('destroy');
            Route::get('/status/{id}','FinalProductItem@changeStatus')->name('status');

        });

        Route::prefix('product-addon-price')->name('product_addon_price.')->group(function(){  

            Route::get('/','ProductAddonController@index')->name('index');
            Route::post('/store','ProductAddonController@store')->name('store');
            Route::get('get-design','ProductAddonController@getDesign')->name('get_design');

        });

        Route::prefix('product')->name('product.')->group(function(){  

            Route::get('/','ProductController@index')->name('index');
            Route::get('/add','ProductController@create')->name('add');
            Route::post('/add','ProductController@store')->name('store');
            Route::get('/edit/{id}','ProductController@edit')->name('edit');
            Route::post('/update/{id}','ProductController@update')->name('update');
            Route::get('/delete/{id}','ProductController@destroy')->name('destroy');
            Route::get('/status/{id}','ProductController@changeStatus')->name('status');
            Route::get('/show/{id}','ProductController@show')->name('show');

            Route::get('/stock-status/{id}','ProductController@stockStatus')->name('stock_status');

           // Route::post('design-data','ProductController@DesignsData')->name('designs_data');


        });



        //in this route gorup we will store addon prices 



        
    });


});