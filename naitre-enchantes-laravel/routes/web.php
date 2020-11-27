<?php

use Illuminate\Support\Facades\Route;
use \App\Products;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/app', 'HomeController@index');

Route::get('/', 'HomePageController@index')->name('home-page');


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/product', 'ProductsController@index')->name('product');
Route::get('/customer', 'ProductsController@index');
Route::get('/cartproduct', 'ProductsController@index');
Route::get('/cart', 'ProductsController@index');

Route::get('/createproduct','ProductsController@create')->name('create_product');
Route::post('/storeproduct','ProductsController@store')->name('store_product');
