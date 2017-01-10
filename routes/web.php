<?php

Route::get('/', function(){
	return view('welcome');
});

// Route::group(['middleware' => ['web']]. function(){
// 	//
// });

// Route::get('/', 'IndexController@sayhello');

Route::get('test', function(){
dd('Hello World');
});