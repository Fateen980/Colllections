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

Route::get('/','collections\categoryController@index');
Route::get('subCategory/{id?}','collections\SubCategoryController@index');
Route::get('item/{id?}/{cat_id?}','collections\itemsController@index');
Route::get('item/detail/{id?}/{cat_id?}','collections\itemsController@detail');