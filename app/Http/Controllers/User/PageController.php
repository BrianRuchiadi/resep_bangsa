<?php

namespace App\Http\Controllers\User;

use App\Models\Ingredient;
use App\Models\Food;
use App\Models\FoodTaste;
use App\Models\ReportType;
use App\Models\Location;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Auth;
use DB;

class PageController extends Controller
{
	public function index()
	{
		$randomFood = DB::table('t0501_food')
                ->inRandomOrder()
                ->first();

        $randomFoods = DB::table('t0501_food')
        		->inRandomOrder()
        		->take(5)
        		->get();

        $randomIngredient = DB::table('t0401_ingredient')
        		->inRandomOrder()
        		->first();

        $randomIngredients = DB::table('t0401_ingredient')
        		->inRandomOrder()
        		->take(5)
        		->get();

		return view('user.pages.index', [
			'allRegions' => $this->allIndonesiaStates(),
			'randomFood' => $randomFood,
			'randomFoods' => $randomFoods,
			'randomIngredient' => $randomIngredient,
			'randomIngredients' => $randomIngredients]);
	}
	public function showFoodIndex()
	{
		$foods = Food::where('deleted_at', null)->
						orderBy('name', 'asc')->
						paginate(16);
		$locationExists = true;
		$foodExists = ($foods->count() > 0) ? true : false;
		$reportTypes = ReportType::all();

		return view('user.pages.food-index', [
			'allRegions' => $this->allIndonesiaStates(),
			'foods' => $foods,
			'reportTypes' => $reportTypes,
			'foodExists' => $foodExists,
			'locationExists' => $locationExists]);
	}

	public function showFoodByRegionName($regionName)
	{
		$regionName = str_replace("-"," ", $regionName);
		$location = Location::where('name', $regionName)->first();
		$locationExists = ($location) ? true : false;
		$foods = null;
		$foodExists = false;

		if($locationExists){
			$foods = Food::where('location_id', $location->id)->orderBy('name', 'asc')->paginate(16);
			$foodExists = ($foods->count() > 0) ? true : false;
		}
		$reportTypes = ReportType::all();

		return view('user.pages.food-index', [
			'allRegions' => $this->allIndonesiaStates(),
			'foods' => $foods,
			'reportTypes' => $reportTypes,
			'foodExists' => $foodExists,
			'locationExists' => $locationExists]);
	}

	public function showIngredientIndex()
	{
		$ingredients = Ingredient::where('deleted_at', null)->
							orderBy('name', 'asc')->
							paginate(16);
		$reportTypes = ReportType::all();

		return view('user.pages.ingredient-index', [
			'allRegions' => $this->allIndonesiaStates(),
			'ingredients' => $ingredients,
			'reportTypes' => $reportTypes]);
	}
	public function showMarketIndex()
	{
		return view('user.pages.market-index',[
			'allRegions' => $this->allIndonesiaStates()]);
	}
	public function showContactIndex()
	{
		return view('user.pages.contact-index',[
			'allRegions' => $this->allIndonesiaStates()]);
	}
	public function showCreateIngredientForm()
	{
		return view('user.pages.create-ingredient-form', [
			'allRegions' => $this->allIndonesiaStates()]);
	}
	public function showCreateRecipeForm()
	{
		return view('user.pages.create-recipe-form', [
			'allRegions' => $this->allIndonesiaStates()]);
	}
	public function showCreateFoodForm()
	{
		$indonesiaLocations = Location::where('country_id', 1)->get();
		
		return view('user.pages.create-food-form', [
			'allRegions' => $this->allIndonesiaStates(),
			'locations' => $indonesiaLocations]);
	}
	public function showRequestFoodForm()
	{
		return view('user.pages.request-food-form',[
			'allRegions' => $this->allIndonesiaStates()]);
	}

	public function showFoodDetail($foodName)
	{
		$foodName = str_replace("-"," ", $foodName);
		$food = Food::where('name', $foodName)->first();
		$reportTypes = ReportType::all();
		$foodExists = ($food) ? true : false;
		$foodTaste = false;
		$foodTasteTotal = 0;

		if($foodExists){
			$foodTaste = FoodTaste::where('food_id', $food->id)->first();
			$foodTasteTotal = $foodTaste->spicy + $foodTaste->sour + $foodTaste->bitter + $foodTaste->sweet;
		}	


		return view('user.pages.food-detail', [
			'allRegions' => $this->allIndonesiaStates(),
			'food' => $food,
			'reportTypes' => $reportTypes,
			'foodExists' => $foodExists,
			'foodTaste' => $foodTaste,
			'foodTasteTotal' => $foodTasteTotal]);
	}
}