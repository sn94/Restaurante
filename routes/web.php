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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/',   'HomeController@index');
Route::get('/verify-user/{code}', 'Auth\RegisterController@activateUser')->name('activate.user');




Route::get('/states',   'StateController@index');
Route::resource('state', 'StateController');



Route::get('towns', 'TownController@index');
Route::resource('town', 'TownController');
Route::get('cities/{id}', 'TownController@cities');  
Route::get('city/jsoncreate', 'TownController@jsoncreate');
Route::post('city/jsonstore', 'TownController@jsonstore');


Route::resource( 'category', 'CategoryController');

Route::resource( 'subcategory', 'SubCategoryController');
Route::get( 'subcategories/{id}',  'SubCategoryController@subcategories');


Route::resource('producto', 'ProductoController');

