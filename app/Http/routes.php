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

Route::get('/', 'PageController@index');
Route::get('single', 'PageController@single');
Route::get('/contact', 'PageController@contact');
Route::get('/login', 'PageController@login');

Route::get('admin', ['middleware' => 'admin', 'uses' => 'AdminController@index']);
Route::get('/admin/create', ['middleware' => 'admin', 'uses' => 'AdminController@addArticle']);
Route::post('/admin/article_store', ['as' => 'article_store', 'middleware' => 'admin', 'uses' => 'AdminController@store']);
Route::get('/admin/articles', ['middleware' => 'admin', 'uses' => 'AdminController@articles']);
Route::get('/admin/pages', ['middleware' => 'admin', 'uses' => 'AdminController@pages']);
Route::get('/admin/users', ['middleware' => 'admin', 'uses' => 'AdminController@users']);
/*
* Routes for select courses:
* LWJGL3 
* Programming Design Patterns
*/
Route::get('/course/{slug}', array('as' => 'page.show', 'uses' => 'CategoryController@show'));
Route::get('/{slug}', 'PageController@show');

//Route::get('/tutorials/{id}', 'PageController@show');
Route::get('single', 'PageController@single');





//Route::get('home', 'PageController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
