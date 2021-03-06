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
//Route::get('relationships','Dashboard\ShowProducts@ShowProducts');

Route::get('login', 'AuthController@login')->name('login');
Route::post('authenticate', 'AuthController@authenticate')->name('authenticate');
Route::get('logout', 'AuthController@logout')->name('logout');
Route::get('register', 'AuthController@register')->name('register');
Route::post('register', 'AuthController@do_register')->name('do_register');


Route::get('Home','FrontsiteController@ShowHome')->name('Frontsite.Home');
Route::get('Girls','FrontsiteController@Girls')->name('Frontsite.Girls');
Route::get('Boys','FrontsiteController@Boys')->name('Frontsite.Boys');
Route::get('cart','FrontsiteController@cart')->name('Frontsite.cart');
Route::get('Intelligent games','FrontsiteController@IntelligentGames')->name('Frontsite.Intelligent games');

/* Route::prefix('Dashboard')->group (function(){
    Route::get('/','Dashboard\DashboardController@index');
    Route::resource('Products','Dashboard\ProductsController');
});*/

Route::namespace('Dashboard')->middleware('auth')->name('dashboard.')->prefix('admin')->group (function(){
    Route::get('/','DashboardController@index')->name('home');
    Route::resource('Products','RProductController');
    Route::resource('Category','CategoryController');
    Route::resource('User','UserController');
});
    /*Route::get('/','Dashboard\DashboardController@index');
    Route::resource('Products','Dashboard\ProductsController');*/


/*Route::get('ShowProducts','Dashboard\ShowProducts@ShowProducts');
Route::get('AddProducts','Dashboard\AddProducts@AddProducts');
Route::get('DeleteProducts','Dashboard\DeleteProducts@DeleteProducts');
Route::get('EditProducts','Dashboard\EditProducts@EditProducts');
Route::get('SaveEdit','Dashboard\SaveEdit@SaveEdit');*/

//Route::resource('User','Dashboard\UserController');


/*Route::get('/', function () {
    return view('welcome');
});

Route::get('Home',function (){
    return view('Frontsite.Home');

})->name('Frontsite.Home');

Route::get('Girls',function (){
    return view('Frontsite.Girls');

})->name('Frontsite.Girls');

Route::get('Boys',function (){
    return view('Frontsite.Boys');

})->name('Frontsite.Boys');

Route::get('cart',function (){
    return view('Frontsite.cart');

})->name('Frontsite.cart');

Route::get('Intelligent games',function (){
    return view('Frontsite.Intelligent games');

})->name('Frontsite.Intelligent games');

Route::get('text-page',function (){
    return view('Frontsite.text-page');

})->name('Frontsite.text-page');*/
