<?php

namespace App\Http\Controllers\User;

use App\Models\Ingredient;
use App\Models\Food;
use App\Models\ReportType;
use App\Models\Location;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Auth;

class PageController extends Controller
{
	public function index()
	{
		return view('user.pages.index');
	}
	public function showFoodIndex()
	{
		$foods = Food::where('deleted_at', null)->
						orderBy('name', 'asc')->
						paginate(16);
		$reportTypes = ReportType::all();

		return view('user.pages.food-index', 
			['foods' => $foods,
			 'reportTypes' => $reportTypes]);
	}
	public function showIngredientIndex()
	{
		$ingredients = Ingredient::where('deleted_at', null)->
							orderBy('name', 'asc')->
							paginate(16);
		$reportTypes = ReportType::all();

		return view('user.pages.ingredient-index', 
			['ingredients' => $ingredients,
			 'reportTypes' => $reportTypes]);
	}
	public function showMarketIndex()
	{
		return view('user.pages.market-index');
	}
	public function showContactIndex()
	{
		return view('user.pages.contact-index');
	}
	public function showCreateIngredientForm()
	{
		return view('user.pages.create-ingredient-form');
	}
	public function showCreateRecipeForm()
	{
		return view('user.pages.create-recipe-form');
	}
	public function showCreateFoodForm()
	{
		$indonesiaLocations = Location::where('country_id', 1)->get();
		
		return view('user.pages.create-food-form', ['locations' => $indonesiaLocations]);
	}
	public function showRequestFoodForm()
	{
		return view('user.pages.request-food-form');
	}
}