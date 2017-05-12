<?php
use App\Models\User;

Route::group(['prefix' => '', 'namespace' => 'User'], function () {

	Route::Auth();
	Route::get('/', 'PageController@index');
});