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



