<?php
use App\Models\User;

Route::group(['prefix' => '', 'namespace' => 'User'], function () {

	Route::Auth();
	Route::get('/', 'PageController@index');
	Route::get('/makanan', 'PageController@showFoodIndex');
	Route::get('/bahan-makanan', 'PageController@showFoodIngredientIndex');
	Route::get('/pasar', 'PageController@showMarketIndex');
	Route::get('/hubungi', 'PageController@showContactIndex');
	Route::get('/kontribusi/bahan-makanan', 'PageController@showCreateIngredientForm');
	Route::get('/kontribusi/resep', 'PageController@showCreateRecipeForm');
	Route::get('/kontribusi/data-makanan', 'PageController@showCreateFoodForm');

});