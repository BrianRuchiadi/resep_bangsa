<?php

namespace App\Http\Controllers\User;

use App\Models\Food;
use App\Models\FoodOverview;
use App\Models\FoodIngredient;
use App\Models\FoodTaste;
use App\Models\FoodNutritionFact;
use App\Models\LogInsert;
use App\Models\Inquiry;
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
		$this->validate($request,[
			'email' => 'bail|required|email',
			'food_name' => 'bail|required|min:3|unique:t0501_food,name'
		], [
			'email.required' => 'email dibutuhkan untuk verifikasi',
			'email.email' => 'format email tidak valid',
			'food_name.required' => 'nama makanan di butuhkan',
			'food_name.min' => 'nama makanan minimal 3 huruf',
			'food_name.unique' => 'nama makanan sudah tersedia'
		]);

		Inquiry::create([
			'inquired_by' => $request->input('email'),
			'description' => 'permintaan data makanan ' . $request->input('food_name'),
			'is_read' => 0
		]);

		$request->session()->flash('food-request-success', 'permintaan data makanan berhasil di simpan');

		return redirect()->route('permintaan-data-makanan');
	}

	public function createFood(Request $request)
	{
		$this->validate($request,[
			'email' => 'bail|required|email',
			'food_name' => 'bail|required|min:3|unique:t0501_food,name'
		], [
			'email.required' => 'email dibutuhkan untuk verifikasi',
			'email.email' => 'format email tidak valid',
			'food.required' => 'nama makanan di butuhkan',
			'food.min' => 'nama makanan minimal 3 huruf',
			'food.unique' => 'nama makanan harus unik'
		]);

		$userId = (Auth::user()) ? Auth::user()->id : null;
		$userEmail = (Auth::user()) ? Auth::user()->email : $request->input('email');

		$manis = (isset($request->input('rasa')['manis'])) ? 2 : 1;
		$pahit = (isset($request->input('rasa')['pahit'])) ? 2 : 1;
		$asam = (isset($request->input('rasa')['asam'])) ? 2 : 1;
		$pedas = (isset($request->input('rasa')['pedas'])) ? 2 : 1;

		$image = $request->file('food_picture');
		$imageName = time() . '_' . strtolower($request->input('food_name')) . '.' . $image->getClientOriginalExtension();
		$destinationPath = resource_path('assets/images/food/');

		$saveImage = Image::make($image->getRealPath());
		$saveImage->resize(200, 300, function ($constraint) {
			$constraint->aspectRatio();
		})->save($destinationPath . '/' . $imageName);


		$publicPath = public_path('assets/images/food/');

		$saveImage->resize(200, 300, function ($constraint) {
			$constraint->aspectRatio();
		})->save($publicPath . '/' . $imageName);

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

		FoodOverview::create([
			'food_id' => $food->id,
			'overview_1_header' => 'sejarah makanan',
			'overview_2_header' => 'deskripsi makanan',
			'overview_1' => $overview_1,
			'overview_2' => $overview_2
		]);

		FoodTaste::create([
			'food_id' => $food->id,
			'spicy' => $pedas,
			'sweet' => $manis,
			'sour' => $asam,
			'bitter' => $pahit
		]);

		LogInsert::create([
			'user_type' => 'user',
			'user_id' => $userId,
			'user_email' => $userEmail,
			'table_name' => 't0501_food',
			'table_id' => $food->id
		]);

		$foodJson = file(public_path('assets/json/makanan.json'));
		$lastLine = count($foodJson) - 1;

		foreach($foodJson as $lineNumber => &$lineContent){
			if($lineNumber == $lastLine - 1){
				str_replace("\n", ',', $lineContent);
				$lineContent .= ',' . "\n" . '{"name" : "' . $request->input('food_name') . '"}';
			}
		}

		$allContent = implode("", $foodJson);
		file_put_contents(public_path('assets/json/makanan.json'), $allContent);
		file_put_contents(resource_path('assets/json/makanan.json'), $allContent);

		$request->session()->flash('food-add-success', 'makanan berhasil di tambahkan');
		return redirect()->route('kontribusi-data-makanan');
	}

}