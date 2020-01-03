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

Route::get('/', "HomeController@index");

Route::resource('/articles', 'ArticlesController');

Route::get("/articles/create/{id}", "ArticlesController@create")->name('create_articles');

Route::get("/articles/edit/{id}", "ArticlesController@edit")->name('editer_articles');

Route::patch("/articles/edit/{id}", "ArticlesController@update")->name('update_articles');

Route::delete('articles/{id}', 'ArticlesController@destroy');

Route::get('/articles/create', 'ArticlesController@create')->name('create_articles')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index') ->name('home');

Route::resource('/categories', 'CategoriesController');


Route::get("/categories/create/{id}", "CategoriesController@create")->name('create_categories');

Route::get("/Categories/edit/{id}", "CategoriesController@edit")->name('editer_categories');

Route::patch("/categories/edit/{id}", "CategoriesController@update")->name('update_categories');

Route::delete('categories/{id}', 'CategoriesController@destroy');
