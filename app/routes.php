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

Route::get('/', function()
{
	return View::make('hello');
});



// route to show the login form
Route::get('login', array('uses' => 'LoginController@showLogin'));

// route to process the form
Route::post('login', array('uses' => 'LoginController@doLogin'));

// route to process Logout
Route::get('logout', array('uses' => 'LoginController@doLogout'));


//showformcontact




Route::group(array('before' => 'auth'), function() {

	Route::get('contacts', array('uses' => 'ContactsController@showform'));
	Route::post('contacts/add', array('uses' => 'ContactsController@add'));
	Route::get('contacts/list', array('uses' => 'ContactsController@showcontacts'));
	Route::post('contacts/search', array('uses' => 'ContactsController@postSearch'));
	
});










