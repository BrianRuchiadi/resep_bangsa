<?php

namespace App\Http\Controllers\User;

use App\Models\Ingredient;
use App\Models\Food;
use App\Models\FoodTaste;
use App\Models\FoodOverview;
use App\Models\FoodNutritionFact;
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
			'foodCounts' => $this->getFoodCount(),
			'ingredientCounts' => $this->getIngredientCount(),
			'randomFood' => $randomFood,
			'randomFoods' => $randomFoods,
			'randomIngredient' => $randomIngredient,
			'randomIngredients' => $randomIngredients]);
	}
	public function index2()
	{
		return view('user.pages.index2');
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
			'foodCounts' => $this->getFoodCount(),
			'ingredientCounts' => $this->getIngredientCount(),
			'foods' => $foods,
			'reportTypes' => $reportTypes,
			'foodExists' => $foodExists,
			'locationExists' => $locationExists]);
	}

	public function showFoodIndex2()
	{
		return view('user.pages.food-index2');
	}

	public function showTipsMemasak2()
	{
		return view('user.pages.tips-tips-memasak2');
	}

	public function showResep2()
	{
		return view('user.pages.resep2');
	}

	public function showProfile2()
	{
		return view('user.pages.profile2');
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
			'foodCounts' => $this->getFoodCount(),
			'ingredientCounts' => $this->getIngredientCount(),
			'foods' => $foods,
			'reportTypes' => $reportTypes,
			'foodExists' => $foodExists,
			'locationExists' => $locationExists]);
	}

	public function showIngredientByName($ingredientName)
	{
		$ingredientName = str_replace("-"," ", $ingredientName);
		$ingredient = Ingredient::where('name', $ingredientName)->first();
		$ingredientExists = ($ingredient) ? true : false;
		$reportTypes = ReportType::all();
		$type = 'search';
		
		return view('user.pages.ingredient-index', [
			'allRegions' => $this->allIndonesiaStates(),
			'foodCounts' => $this->getFoodCount(),
			'ingredientCounts' => $this->getIngredientCount(),
			'ingredient' => $ingredient,
			'reportTypes' => $reportTypes,
			'ingredientExists' => $ingredientExists,
			'type' => $type]);
	}

	public function showIngredientIndex()
	{
		$ingredients = Ingredient::where('deleted_at', null)->
							orderBy('name', 'asc')->
							paginate(16);
		$reportTypes = ReportType::all();
		$ingredientExists = true;
		$type = 'all';

		return view('user.pages.ingredient-index', [
			'allRegions' => $this->allIndonesiaStates(),
			'foodCounts' => $this->getFoodCount(),
			'ingredientCounts' => $this->getIngredientCount(),
			'ingredients' => $ingredients,
			'reportTypes' => $reportTypes,
			'ingredientExists' => $ingredientExists,
			'type' => $type]);
	}

	public function showIngredientIndex2()
	{
		return view('user.pages.ingredient-index2');
	}
	public function showMarketIndex()
	{
		return view('user.pages.market-index',[
			'allRegions' => $this->allIndonesiaStates(),
			'foodCounts' => $this->getFoodCount(),
			'ingredientCounts' => $this->getIngredientCount()
		]);
	}
	public function showContactIndex()
	{
		return view('user.pages.contact-index',[
			'allRegions' => $this->allIndonesiaStates(),
			'foodCounts' => $this->getFoodCount(),
			'ingredientCounts' => $this->getIngredientCount()
		]);
	}
	public function showCreateIngredientForm()
	{
		return view('user.pages.create-ingredient-form', [
			'allRegions' => $this->allIndonesiaStates(),
			'foodCounts' => $this->getFoodCount(),
			'ingredientCounts' => $this->getIngredientCount()
		]);
	}
	public function showCreateRecipeForm()
	{
		return view('user.pages.create-recipe-form', [
			'allRegions' => $this->allIndonesiaStates(),
			'foodCounts' => $this->getFoodCount(),
			'ingredientCounts' => $this->getIngredientCount()
		]);
	}
	public function showCreateFoodForm()
	{
		$indonesiaLocations = Location::where('country_id', 1)->get();
		
		return view('user.pages.create-food-form', [
			'allRegions' => $this->allIndonesiaStates(),
			'foodCounts' => $this->getFoodCount(),
			'ingredientCounts' => $this->getIngredientCount(),
			'locations' => $indonesiaLocations
		]);
	}
	public function showRequestFoodForm()
	{
		return view('user.pages.request-food-form',[
			'allRegions' => $this->allIndonesiaStates(),
			'foodCounts' => $this->getFoodCount(),
			'ingredientCounts' => $this->getIngredientCount()
		]);
	}

	public function showFoodDetail($foodName)
	{
		$foodName = str_replace("-"," ", $foodName);
		$food = Food::where('name', $foodName)->first();
		$reportTypes = ReportType::all();
		$foodExists = ($food) ? true : false;
		$foodTaste = false;
		$foodTasteTotal = 0;
		$foodPercentage = null;
		$foodOverview = null;
		$foodNutritionExists = false;
		$foodNutrition = null;

		if($foodExists){
			$foodOverview = FoodOverview::where('food_id', $food->id)->first();
			$foodTaste = FoodTaste::where('food_id', $food->id)->first();
			$foodNutritionExists = (FoodNutritionFact::where('food_id', $food->id)->first()) ? true : false;
			$foodNutrition = (FoodNutritionFact::where('food_id', $food->id)->first()) ? FoodNutrition::where('food_id', $food->id)->get() : false;
			$foodTasteTotal = $foodTaste->spicy + $foodTaste->sour + $foodTaste->bitter + $foodTaste->sweet;
			$foodPercentage['manis'] = $foodTaste->sweet/$foodTasteTotal * 100;
			$foodPercentage['asam'] = $foodTaste->sour/$foodTasteTotal * 100;
			$foodPercentage['pahit'] = $foodTaste->bitter/$foodTasteTotal * 100;
			$foodPercentage['pedas'] = $foodTaste->spicy/$foodTasteTotal * 100;
		}	

		return view('user.pages.food-detail', [
			'allRegions' => $this->allIndonesiaStates(),
			'foodCounts' => $this->getFoodCount(),
			'ingredientCounts' => $this->getIngredientCount(),
			'food' => $food,
			'reportTypes' => $reportTypes,
			'foodExists' => $foodExists,
			'foodTaste' => $foodTaste,
			'foodTasteTotal' => $foodTasteTotal,
			'foodPercentage' => $foodPercentage,
			'foodOverview' => $foodOverview,
			'foodNutritionExists' => $foodNutritionExists,
			'foodNutrition' => $foodNutrition]);
	}

}