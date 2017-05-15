<?php

namespace App\Http\Controllers\User;

use App\Models\Food;
use App\Models\FoodOverview;
use App\Models\FoodIngredient;
use App\Models\FoodTaste;
use App\Models\FoodNutritionFact;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Foundation\Auth\RegistersUsers;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use Auth;

class FoodController extends Controller
{
	public function submitRequestFoodForm (Request $request)
	{

		dd($request->all());
	}

	public function createFood(Request $request)
	{
		$this->validate($request,[
			'email' => 'bail|email',
			'food_name' => 'bail|required|min:3|unique:t0501_food,name'
		], [
			'email.email' => 'format email tidak valid',
			'food.required' => 'nama makanan di butuhkan',
			'food.min' => 'nama makanan minimal 3 huruf',
			'food.unique' => 'nama makanan harus unik'
		]);

		$userId = (Auth::user()) ? Auth::user()->id : null;
		$userEmail = (Auth::user()) ? Auth::user()->email : $request->input('email');

		$image = $request->file('food_picture');
		$imageName = time() . '_' . strtolower($request->input('food_name')) . '.' . $image->getClientOriginalExtension();
		$destinationPath = resource_path('assets/images/food/');

		$saveImage = Image::make($image->getRealPath());
		$saveImage->resize(200, 300, function ($constraint) {
			$constraint->aspectRatio();
		})->save($destinationPath . '/' . $imageName);

		$overview_1 = ($request->input('overview_1')) ? $request->input('overview_1') : null;
		$overview_2 = ($request->input('overview_2')) ? $request->input('overview_2') : null;

		$food = Food::create([
			'name' => $request->input('food_name'),
			'picture' => 'assets/images/food/' . $imageName,
			'featured_in' => 0,
			'verified' => 0,
			'is_active' => 0,
			'location_id' => $request->input('food_region')
		]);

		$foodOverview = FoodOverview::create([
			'food_id' => $food->id,
			'overview_1_header' => 'sejarah makanan',
			'overview_2_header' => 'deskripsi makanan',
			'overview_1' => $overview_1,
			'overview_2' => $overview_2
		]);

		FoodTaste::create([
			'food_id' => $food->id,
			'spicy' => 0,
			'sweet' => 0,
			'sour' => 0,
			'bitter' => 0
		]);

		$request->session()->flash('food-add-success', 'makanan berhasil di tambahkan');
		return redirect()->route('kontribusi-data-makanan');
	}

}