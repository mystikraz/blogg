<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('blog/{slug}', ['as'=>'blog.single', 'uses'=>'BlogController@getSingle'])->where('slug','[\w\d\-\_]+');
Route::get('blog', ['as'=>'blog.index', 'uses'=>'BlogController@getIndex']);
Route::get('/contact', 'PagesController@getContact');
Route::get('/about', 'PagesController@getAbout');
Route::get('/', 'PagesController@getIndex');
Route::resource('posts', 'PostController');
Route::resource('categories', 'CategoryController',['except'=>['create']]);
Route::resource('tags', 'TagController',['except'=>['create']]);
//Route::resource('categoties', 'CategoryController',['only'=>['create', 'index']]);



Route::auth();

Route::get('/home', 'HomeController@index');
