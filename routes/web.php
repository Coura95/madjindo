<?php

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
Route::get('/home', 'HomeController@index');
Route::get('/', function () {
    return view('home');
});
Route::get('/accueil',"HomeController@index");
//Route::get('/backoffice',"BackofficeController@backoffice");
Route::get('/categories', 'CategoriesController@index')->name('categories.index');
Route::get('categories/create','CategoriesController@create')->name("categories.create");
Route::post('categories/create','CategoriesController@store')->name("categories.store");

Route::delete('category/{id}', 'CategoriesController@destroy');
Route::delete('product/{id}', 'ProductsController@destroy');

Route::get('categories/{id}/edit','CategoriesController@edit')->name("editer_category");

Route::patch('categories/{id}/edit', 'CategoriesController@update')->name('update_category');


Route::get('/products','ProductsController@index')->name('products.index');
Route::get('/products/create','ProductsController@create')->name('product_create');
Route::post('/products/create','ProductsController@store')->name('store_products');

Route::get('products/{id}/edit','ProductsController@edit')->name("editer_produit");

Route::patch('products/{id}/edit', 'ProductsController@update')->name('update_product');
Route::get('about',function(){
    return view("about");
});
//
/*
//Route::get('/produits',"ProductsController@index");
//Route::get('/produits/{slug}',"ProductsController@show");
/*


Route::get('/produits/{id}', function ($id) {
    return "je suis le produit $id";
});
Route::get('/produits', function ($id) {
    return "je suis le produit $id";
});*/


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

