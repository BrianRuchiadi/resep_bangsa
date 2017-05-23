<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Food;
use App\Models\Ingredient;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function allIndonesiaStates(){
    	return Location::where('country_id' , 1)->get();
    }

    public function getFoodCount(){
    	return Food::count();
    }

    public function getIngredientCount(){
    	return Ingredient::count();
    }
}
