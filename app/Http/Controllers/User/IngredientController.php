<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
	public function createIngredient(Request $request)
	{
		if(Input::hasFile('ingredient_picture')){
			dd(Input::file('ingredient_picture'));
		}
		dd($request->all());
	}

}