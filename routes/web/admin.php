<?php

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    
    Auth::routes();
    Route::get('/', 'PageController@index');

    Route::get('/list', 'AdminController@index');
    Route::get('/add', 'AdminController@showCreateForm');
    Route::get('/edit/{admin}', 'AdminController@showEditForm');
    Route::post('/add', 'AdminController@create');
    Route::post('/edit/{admin}', 'AdminController@edit');
    Route::post('/remove/{admin}', 'AdminController@delete');

    Route::group(['prefix' => 'user'], function() {
        Route::get('/list', 'UserController@index');
        Route::get('/add', 'UserController@showCreateForm');
        Route::get('/edit/{user}', 'UserController@showEditForm');
        Route::post('/add', 'UserController@create');
        Route::post('/edit/{user}', 'UserController@edit');
        Route::post('/remove/{user}', 'UserController@delete');
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