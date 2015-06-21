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

Route::get('/', 'FrontendController@index');
Route::get('/contact', 'FrontendController@contact');


Route::group(['middleware' => 'auth','prefix' => 'admin', 'as' ], function() {
    
    Route::get('', 'AdminController@index');
    
    Route::resource('users', 'UserController');
    Route::resource('pages', 'CourseController');
    Route::resource('articles', 'ArticleController');
    
});


Route::get('/course/{slug}', array('as' => 'page.show', 'uses' => 'CategoryController@show'));
Route::get('/{slug}', 'FrontendController@show');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);









