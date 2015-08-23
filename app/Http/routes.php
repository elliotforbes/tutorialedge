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
Route::get('/home', 'FrontendController@index');
Route::get('/contact', 'FrontendController@contact');
Route::get('/about', 'FrontendController@about');
Route::get('/search', 'FrontendController@search');

//Route::get('/test', 'FrontendController@test');

Route::get('/profile/{slug}', 'ProfileController@show');
//Route::get('adminnew', 'AdminController@newDesign');


Route::group(['middleware' => 'auth','prefix' => 'admin', 'as' ], function() {
    
    Route::get('', 'AdminController@index'); 
    
    Route::resource('users', 'UserController');
    Route::resource('pages', 'CourseController');
    Route::resource('articles', 'ArticleController');
    Route::resource('videos', 'VideoController');
});


Route::resource('queries', 'QueryController');

//Route::get('video', 'VideoController@single');
Route::get('/video/{slug}', array('as' => 'video.show', 'uses' => 'VideoController@show'));

Route::get('/course/{slug}', array('as' => 'page.show', 'uses' => 'CourseController@show'));
Route::get('/{slug}', 'FrontendController@show');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);









