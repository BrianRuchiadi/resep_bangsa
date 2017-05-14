<?php

namespace App\Http\Controllers\User;

use App\Models\Ingredient;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Foundation\Auth\RegistersUsers;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
	public function createIngredient(Request $request)
	{
		$this->validate($request,[
			'ingredient_name' => 'bail|required|min:3|unique:t0401_ingredient,name',
			'ingredient_picture' => 'bail|required'
		], [
			'ingredient_name.required' => 'nama bahan di butuhkan',
			'ingredient_name.min' => 'nama bahan minimal 3 huruf',
			'ingredient_name.unique' => 'nama bahan harus unik',
			'ingredient_picture.required' => 'gambar dibutuhkan'
		]);

		$image = $request->file('ingredient_picture');
		$imageName = time() . '_' . $request->input('ingredient_name') . '.' . $image->getClientOriginalExtension();
		$destinationPath = resource_path('assets/images/food/ingredients');

		$saveImage = Image::make($image->getRealPath());
		$saveImage->resize(200, 300, function ($constraint) {
			$constraint->aspectRatio();
		})->save($destinationPath . '/' . $imageName);

		Ingredient::Insert([
			'name' => $imageName,
			'picture' => 'assets/images/food/ingredients/' . $imageName,
			'used_in' => 0,
			'verified' => 0,
			'is_active' => 1
		]);

		return redirect()->route('kontribusi-bahan-makanan');
	}

}