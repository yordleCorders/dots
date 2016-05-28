<?php

Route::group(['namespace' => 'Backend', 'prefix' => 'api', 'middleware' => 'auth'], function() {
	Route::resource('section', 'SectionController');
	Route::resource('document', 'DocumentController');
	Route::resource('user', 'UserController');
	Route::resource('project', 'ProjectController');
});

Route::post('login', 'AuthController@login');
Route::get('logout', 'AuthController@logout');