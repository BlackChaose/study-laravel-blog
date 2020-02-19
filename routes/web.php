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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', 'PageController@about');
Route::get('/articles', 'PageController@articles');
Route::get('/rating', 'Rating@index');
Route::get('/contacts','Rating@getmail');
Route::get('/article_categories','ArticleCategoryController@index')->name('article_categories.index');
Route::get('/articles/create','PageController@create')->name('articles.create');
Route::post('/articles','PageController@store')->name('articles.store');

Route::get('/articles/{id}/edit','PageController@edit')
    ->name('article.edit');
// Метод PATCH
Route::patch('/articles/{id}', 'PageController@update')
    ->name('article.update');

Route::get('/articles/{id}', 'PageController@show')->name('article.show');
Route::get('/index', 'PageController@index')->name('articles.index');

Route::get('/article_categories/create', 'ArticleCategoryController@create')
    ->name('article_categories.create');

Route::post('/article_categories', 'ArticleCategoryController@store')
    ->name('article_categories.store');

