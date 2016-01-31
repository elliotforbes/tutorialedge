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
Route::get('/courses', 'FrontendController@courseIndex');


Route::get('sitemap', 'FrontendController@sitemap');

Route::get('/profile/{slug}', 'ProfileController@show');

Route::get('/blog', 'BlogController@index');

Route::resource('users', 'UserController');

Route::group(['middleware' => 'auth','prefix' => 'admin', 'as' ], function() {
    
    Route::get('', 'AdminController@index'); 
    
    Route::resource('users', 'UserController');
    Route::resource('courses', 'CourseController');
    Route::resource('categories', 'CategoryController');
    Route::resource('articles', 'ArticleController');
    Route::resource('videos', 'VideoController');
    Route::resource('media', 'MediaController');
    Route::resource('settings', 'SettingsController');
    Route::resource('mail', 'MailController');
});


Route::resource('queries', 'QueryController');

Route::get('/course/{slug}', 'CourseController@show');
Route::get('/video/{slug}', array('as' => 'video.show', 'uses' => 'VideoController@show'));

Route::get('/category/{slug}', array('as' => 'page.show', 'uses' => 'CategoryController@show'));
Route::get('/{slug}', 'FrontendController@show');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);







