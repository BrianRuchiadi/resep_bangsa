<?php
use Illuminate\Http\Request;
Route::group(['prefix' => 'admin', 'namespace' => 'Admin\Api'], function () {
    Route::group(['middleware' => ['auth:api_admin', 'verifyAdmin']], function () {    

        //generic
        Route::resource('requests', 'RequestController');
        //CMS
        Route::post('/cms/images', 'CmsController@updateImage');
        //application

        Route::get('/', 'AdminController@getAdmins');
        Route::get('/users', 'UsersController@getUsers');
        Route::get('/users/{user}', 'UsersController@getUser')->where('user', '[0-9]+');

        Route::get('/info', 'UsersController@info');
        Route::get('/update-logs', 'LogsController@getUpdateLogs');
        Route::get('/insert-logs', 'LogsController@getInsertLogs');
    });
});