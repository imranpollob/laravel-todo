<?php

// '->name()'' is same to 'as'

// shortcut of 'uses'
Route::get('/', 'TodoController@index')->name('home');

Route::post('create', [
	'uses' => 'TodoController@store'
]);

Route::get('{id}/edit', [
	'uses' => 'TodoController@edit'
]);

Route::post('{id}/update', [
	'uses' => 'TodoController@update',
	'as'   => 'update'
]);

Route::get('{id}/completed', [
	'uses' => 'TodoController@completed'
]);

Route::get('{id}/incomplete', [
	'uses' => 'TodoController@incomplete'
]);

Route::get('{id}/delete', [
	'uses' => 'TodoController@delete'
]);
