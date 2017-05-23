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
			'email' => 'bail|required|email',
			'ingredient_name' => 'bail|required|min:3|unique:t0401_ingredient,name',
			'ingredient_picture' => 'bail|required'
		], [
			'email.required' => 'email dibutuhkan untuk verifikasi',
			'email.email' => 'format email tidak valid',
			'ingredient_name.required' => 'nama bahan di butuhkan',
			'ingredient_name.min' => 'nama bahan minimal 3 huruf',
			'ingredient_name.unique' => 'nama bahan harus unik',
			'ingredient_picture.required' => 'gambar dibutuhkan'
		]);

		$userId = (Auth::user()) ? Auth::user()->id : null;
		$userEmail = (Auth::user()) ? Auth::user()->email : $request->input('email');

		$image = $request->file('ingredient_picture');
		$imageName = time() . '_' . strtolower($request->input('ingredient_name')) . '.' . $image->getClientOriginalExtension();
		$destinationPath = resource_path('assets/images/food/ingredients');

		$saveImage = Image::make($image->getRealPath());
		$saveImage->resize(200, 300, function ($constraint) {
			$constraint->aspectRatio();
		})->save($destinationPath . '/' . $imageName);

		$publicPath = public_path('assets/images/food/ingredients');

		$saveImage->resize(200, 300, function ($constraint) {
			$constraint->aspectRatio();
		})->save($publicPath . '/' . $imageName);

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
		
		$ingredientJson = file(public_path('assets/json/bahan.json'));
		$lastLine = count($ingredientJson) - 1;

		foreach($ingredientJson as $lineNumber => &$lineContent){
			if($lineNumber == $lastLine - 1){
				$lineContent .= ', {"name" : "' . $request->input('ingredient_name') . '"}';
			}
		}

		$allContent = implode("", $ingredientJson);
		file_put_contents(public_path('assets/json/bahan.json'), $allContent);
		file_put_contents(resource_path('assets/json/bahan.json'), $allContent);

		$request->session()->flash('ingredient-add-success', 'bahan makanan berhasil di tambahkan');
		return redirect()->route('kontribusi-bahan-makanan');
	}

}