<?php
/*
Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
*/ 



Route::bind('jobs', function($id){
	return App\Jobs::where('id', $id)->first();
});

$router->resource('jobs','ApplicationController', [
	'names' => [
		'index' => 'jobs_path',
		'show' => 'job_path',
		'edit' => 'job_edit',
		'update' => 'job_update',
		'create' => 'job_create',
		'store' => 'job_store',
		'destroy' => 'job_destroy'
	],
	
	'only' => [
		'index','show','edit','update','create','store','destroy'
	]
]);