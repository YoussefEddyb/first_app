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
    return view('welcome');
});


// Route::get('/categories','CategoryController@index')->name('categories.index');
// Route::get('/categories/create','CategoryController@create')->name('categories.create');
// Route::post('/categories/store','CategoryController@store')->name('categories.store');

// Route::get('/categories/edit/{id}','CategoryController@edit')->name('categories.edit');

// Route::get('/categories/show/{id}','CategoryController@show')->name('categories.show');

// Route::put('/categories/update/{id}','CategoryController@update')->name('categories.update');

// Route::delete('/categories/destroy/{id}','CategoryController@destroy')->name('categories.destroy');


// Route::resource('/categories','CategoryController')->only(['index','store','show','update','destroy']);

// /Route::resource('/categories','CategoryController')->except(['create','edit']);


Route::resource('/categories','CategoryController');

Route::resource('/users','UserController');

Route::resource('/posts', 'PostController');
