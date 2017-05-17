<?php
use App\Models\User;

Route::group(['prefix' => '', 'namespace' => 'User'], function () {

	Route::Auth();
	Route::get('/', 'PageController@index');
	Route::get('/makanan', 'PageController@showFoodIndex');
	Route::name('bahan-makanan')->get('/bahan-makanan', 'PageController@showIngredientIndex');
	Route::get('/pasar', 'PageController@showMarketIndex');
	Route::get('/hubungi', 'PageController@showContactIndex');
	Route::name('kontribusi-bahan-makanan')->get('/kontribusi/bahan-makanan', 'PageController@showCreateIngredientForm');
	Route::get('/kontribusi/resep', 'PageController@showCreateRecipeForm');
	Route::name('kontribusi-data-makanan')->get('/kontribusi/data-makanan', 'PageController@showCreateFoodForm');
	Route::name('permintaan-data-makanan')->get('/permintaan/data-makanan', 'PageController@showRequestFoodForm');
	Route::get('/bahan-makanan/{name?}', 'PageController@showIngredientByName');
	Route::get('/makanan/{name?}', 'PageController@showFoodByRegionName');
	Route::get('/makanan/detail/{name?}', 'PageController@showFoodDetail');

	Route::post('/kontribusi/data-makanan', 'FoodController@createFood');
	Route::post('/permintaan/data-makanan', 'FoodController@submitRequestFoodForm');
	Route::post('/kontribusi/bahan-makanan', 'IngredientController@createIngredient');
	Route::post('/kontribusi/rasa-makanan', 'FoodTasteController@submitFoodTasteVote');
	Route::post('/laporan/bahan-makanan', 'ReportController@submitIngredientReport');
	Route::post('/inquiry', 'InquiryController@submitInquiry');

});