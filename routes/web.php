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
//
//Route::get('/', function () {
   // return view('welcome');
//});

//Frontend
Route::get('/','FirstController@index')->name('homepage');
Route:: get('cart','FirstController@cart')->name('ShoppingCart');
Route:: get('itemdetail','FirstController@itemdetail')->name('ItemDetail');
Route::get('filter/{id}', 'FirstController@filter')->name('filterpage');
Route::resource('orders', 'OrderController');
Route::get('orderhistory', 'FirstController@orderhistory')->name('orderhistorypage');



//Backend
Route::middleware('role:admin')->group(function () {
Route::get('dashboard','BackendController@dashboard')->name('dashboardpage');
Route::resource('categories', 'CategoryController');
Route::resource('subcategories', 'SubcategoryController');
Route::resource('brands', 'BrandController');
Route::resource('items', 'ItemController');
});


// Auth
Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');
