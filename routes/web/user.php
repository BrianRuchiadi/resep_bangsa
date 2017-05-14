<?php
use App\Models\User;

Route::group(['prefix' => '', 'namespace' => 'User'], function () {

	Route::Auth();
	Route::get('/', 'PageController@index');
	Route::get('/makanan', 'PageController@showFoodIndex');
	Route::get('/bahan-makanan', 'PageController@showFoodIngredientIndex');
	Route::get('/pasar', 'PageController@showMarketIndex');
	Route::get('/hubungi', 'PageController@showContactIndex');
	Route::name('kontribusi-bahan-makanan')->get('/kontribusi/bahan-makanan', 'PageController@showCreateIngredientForm');
	Route::get('/kontribusi/resep', 'PageController@showCreateRecipeForm');
	Route::get('/kontribusi/data-makanan', 'PageController@showCreateFoodForm');
	Route::get('/permintaan/data-makanan', 'PageController@showRequestFoodForm');

	Route::post('/kontribusi/bahan-makanan', 'IngredientController@createIngredient');
	Route::post('/permintaan/data-makanan', 'FoodController@submitRequestFoodForm');
});