<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Route::get('/', function()
// {
// 	return View::make('hello');
// });

// Route::get('login', array('uses' => 'HomeController@showLogin'));

// Route::post('login', array('uses' => 'HomeController@doLogin'));
Route::resource('nerds', 'NerdController');

Route::controller('users', 'UsersController');

Route::get('eloquent', 'bearController@view');


Route::get('/', function()
{
	return View::make('home');
});

Route::get('about', function()
{
	return View::make('about');
});

Route::get('work', array('as' => 'work', function()
{
	return View::make('work');
}));

