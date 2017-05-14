<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class FoodController extends Controller
{
	public function submitRequestFoodForm (Request $request)
	{

		dd($request->all());
	}

}