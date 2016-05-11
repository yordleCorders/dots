<?php

Route::resource('section', 'SectionController');
Route::resource('document', 'DocumentController');
Route::resource('user', 'UserController');
Route::post('/login', 'Auth\AuthController@login');