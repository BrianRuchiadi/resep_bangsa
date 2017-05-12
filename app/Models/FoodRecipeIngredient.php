<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class FoodRecipeIngredient extends Model
{
    use SoftDeletes;

    public $table = 't0604_food_recipe_ingredient';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'food_recipe_id', 'ingredient_id'
    ];
}