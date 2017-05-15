<?php

namespace App\Http\Controllers\User;

use App\Models\Ingredient;
use App\Models\LogInsert;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Foundation\Auth\RegistersUsers;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use Auth;

class IngredientController extends Controller
{
	public function createIngredient(Request $request)
	{
		$this->validate($request,[
			'email' => 'bail|email',
			'ingredient_name' => 'bail|required|min:3|unique:t0401_ingredient,name',
			'ingredient_picture' => 'bail|required'
		], [
			'email.email' => 'email format is not valid',
			'ingredient_name.required' => 'nama bahan di butuhkan',
			'ingredient_name.min' => 'nama bahan minimal 3 huruf',
			'ingredient_name.unique' => 'nama bahan harus unik',
			'ingredient_picture.required' => 'gambar dibutuhkan'
		]);

		$userId = (Auth::user()) ? Auth::user()->id : null;
		$userEmail = (Auth::user()) ? Auth::user()->email : null;

		$image = $request->file('ingredient_picture');
		$imageName = time() . '_' . strtolower($request->input('ingredient_name')) . '.' . $image->getClientOriginalExtension();
		$destinationPath = resource_path('assets/images/food/ingredients');

		$saveImage = Image::make($image->getRealPath());
		$saveImage->resize(200, 300, function ($constraint) {
			$constraint->aspectRatio();
		})->save($destinationPath . '/' . $imageName);

		$ingredient = Ingredient::create([
			'name' => strtolower($request->input('ingredient_name')),
			'picture' => 'assets/images/food/ingredients/' . $imageName,
			'used_in' => 0,
			'verified' => 0,
			'is_active' => 1
		]);

		$logInsert = LogInsert::create([
			'user_type' => 'user',
			'user_id' => $userId,
			'user_email' => $userEmail,
			'table_name' => 't0401_ingredient',
			'table_id' => $ingredient->id
		]);

		$request->session()->flash('ingredient-add-success', 'bahan makanan berhasil di tambahkan');
		return redirect()->route('kontribusi-bahan-makanan');
	}

}