<?php

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    
    Auth::routes();
    Route::get('/', 'PageController@index');

    Route::get('/list', 'AdminController@index');
    Route::get('/add', 'AdminController@showCreateForm');
    Route::get('/edit/{admin}', 'AdminController@showEditForm');
    Route::post('/add', 'AdminController@create');
    Route::post('/edit', 'AdminController@edit');
    Route::post('/remove', 'AdminController@delete');

    Route::group(['prefix' => 'user'], function() {
    	
    });

    Route::group(['prefix' => 'location'], function() {

    });

    Route::group(['prefix' => 'ingredient'], function() {

    });

    Route::group(['prefix' => 'food'], function(){

    });

    Route::group(['prefix' => 'recipe'], function(){

    });

    Route::group(['prefix' => 'report'], function(){

    });

    Route::group(['prefix' => 'inquiry'], function(){

    });

    Route::group(['prefix' => 'page-stats'], function(){

    });
});