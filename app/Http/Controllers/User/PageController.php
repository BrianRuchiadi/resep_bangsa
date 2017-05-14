<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class PageController extends Controller
{
	public function index()
	{
		return view('user.pages.index');
	}
	public function showFoodIndex()
	{
		return view('user.pages.food-index');
	}
	public function showFoodIngredientIndex()
	{
		return view('user.pages.food-ingredient-index');
	}
	public function showMarketIndex()
	{
		return view('user.pages.market-index');
	}
	public function showContactIndex()
	{
		return view('user.pages.contact-index');
	}
	public function showCreateIngredientForm()
	{
		return view('user.pages.create-ingredient-form');
	}
	public function showCreateRecipeForm()
	{
		return view('user.pages.create-recipe-form');
	}
	public function showCreateFoodForm()
	{
		return view('user.pages.create-food-form');
	}
	public function showRequestFoodForm()
	{
		return view('user.pages.request-food-form');
	}
}