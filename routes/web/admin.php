<?php

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    
    Auth::routes();
    Route::get('/', 'PageController@index');
});