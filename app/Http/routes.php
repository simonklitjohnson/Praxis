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

Route::get('/', 'DashboardController@index');

// Site routes...
Route::get('{site_short_name}/settings', ['as' => 'site_settings', 'uses' => 'SiteController@settings']);

// Application routes...
Route::get('{site_short_name}/received', ['as' => 'received', 'uses' => 'ApplicationController@received']);
Route::get('{site_short_name}/approved', ['as' => 'approved', 'uses' => 'ApplicationController@approved']);
Route::get('{site_short_name}/verified', ['as' => 'verified', 'uses' => 'ApplicationController@verified']);
Route::get('{site_short_name}/denied', ['as' => 'denied', 'uses' => 'ApplicationController@denied']);

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
