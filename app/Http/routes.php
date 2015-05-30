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

/*
* Routes for select courses:
* LWJGL3 
* Programming Design Patterns
*/
Route::get('/course/{slug}', array('as' => 'page.show', 'uses' => 'CategoryController@show'));
Route::get('/{slug}', 'PageController@show');

//Route::get('/tutorials/{id}', 'PageController@show');
Route::get('single', 'PageController@single');



Route::get('/admin', 'AdminController@index');
Route::get('/admin/create', 'AdminController@index');
Route::post('/admin/create', 'AdminController@store');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('post/{id}', function($id)
           {
                return 'post' . $id;  
           });