<?php

use Illuminate\Http\Request;

Route::get('/user', function(){ 
	die('User API!');
});


Route::group(['namespace' => 'User\Api'], function () {
    // Route::get('/auth/create/facebook', 'Auth\LoginController@facebook');

    Route::group(['middleware' => 'auth:api'], function () {
    	//users
    	Route::get('users/search/available-username', 'UserController@availableUsername');
    	Route::get('users/account/binded-customers', 'UserController@bindedCustomers');
    	Route::post('users/account/unbind-customers', 'UserController@unbindCustomers');
    	Route::post('users/account/bind-customers', 'UserController@bindCustomers');
    	Route::post('users/verify', 'UserController@verify');
    	Route::post('users/update', 'UserController@update');

    	//friends
    	Route::get('friends/search', 'FriendController@search')->name('friends.search');
    	Route::put('friends/favorite', 'FriendController@favorite')->name('friends.favorite');
    	Route::put('friends/hide', 'FriendController@hide')->name('friends.hide');
	   	Route::resource('friends', 'FriendController', ['names' => [
		    'store' => 'friends.add',
		    'destroy' => 'friends.hide',
		]]);

		//customers
		Route::get('customers/search', 'CustomerController@search')->name('customers.search');
    	Route::put('customers/favorite', 'CustomerController@favorite')->name('customers.favorite');
    	Route::put('customers/hide', 'CustomerController@hide')->name('customers.hide');
		Route::resource('customers', 'CustomerController');
		Route::post('customers/update', 'CustomerController@update')->name('customers.update');

		//book
		Route::get('books', 'BookController@index')->name('books.index');
		Route::get('books/overview', 'BookController@overview')->name('books.overview');
		Route::get('users/{user}/books', 'BookController@userBooks')->name('books.userBooks');
		Route::resource('books', 'BookController');
		
		//transaction
	   	Route::resource('transactions', 'TransactionController');

	   	//sports	   	
	   	Route::group(['prefix' => 'sports', 'namespace' => 'Sports'], function () {
		   	Route::resource('accounts', 'AccountController');
		   	Route::resource('reports', 'ReportController');
		   	Route::resource('reports.formulas', 'FormulaController');
		   	Route::resource('reports.sources', 'ReportSourceController');
		   	Route::resource('reports.settlements', 'ReportSettlementController');
		   	Route::resource('settlements', 'SettlementController');

		   	Route::get('reports/{report}/sources/{source}/pull', 'ReportSourceController@pull');
		   	


	   	});

	});

});
