<?php

namespace App\Http\Controllers\User;

use App\Models\Food;
use App\Models\FoodTaste;
use App\Models\FoodTasteHistory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Foundation\Auth\RegistersUsers;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use Auth;

class FoodTasteController extends Controller
{
	public function submitFoodTasteVote (Request $request)
	{
		$this->validate($request,[
			'email' => 'bail|required|email',
			'food' => 'bail|required',
			'vote' => 'bail|required|numeric'
		], [
			'email.required' => 'email di butuhkan untuk verifikasi',
			'email.email' => 'format email tidak valid',
			'food.required' => 'makanan di butuhkan',
			'vote.required' => 'vote perlu pilihan',
			'vote.numeric' => 'nilai voting tidak valid'
		]);
		$foodTaste = FoodTaste::where('food_id', $request->input('food'))->first();

		if(!FoodTasteHistory::where('food_id' , $request->input('food'))->
								where('liked_by', $request->input('email'))->
								first()){
			$foodTasteHistory = FoodTasteHistory::create([
				'food_id' => $request->input('food'),
				'liked_by' => $request->input('email'),
				'spicy' => 0,
				'sweet' => 0,
				'sour' => 0,
				'bitter' => 0
			]);
		}

		$foodTasteHistory = FoodTasteHistory::where('food_id' , $request->input('food'))->
								where('liked_by', $request->input('email'))->
								first();

		switch($request->input('vote')){
			case '1' : 
				if(!$foodTasteHistory->spicy == 1){ 
					$foodTasteHistory->spicy = 1;
					$foodTaste->spicy = $foodTaste->spicy + 1;
				}
				break;
			case '2' : 
				if(!$foodTasteHistory->sweet == 1){
					$foodTasteHistory->sweet = 1;
					$foodTaste->sweet = $foodTaste->sweet + 1;
				} 
				break;
			case '3' : 
				if(!$foodTasteHistory->sour == 1){
					$foodTasteHistory->sour = 1;
					$foodTaste->sour = $foodTaste->sour + 1;
				}   
				break;
			case '4' : 
				if(!$foodTasteHistory->bitter == 1){
					$foodTasteHistory->bitter = 1;
					$foodTaste->bitter = $foodTaste->bitter + 1;
				} 
				break;
		}

		$foodTasteHistory->save();
		$foodTaste->save();

		$request->session()->flash('vote-success', 'vote rasa makanan berhasil di simpan');

		return redirect(url()->previous());
	}
}