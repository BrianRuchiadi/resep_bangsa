<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class FoodNutritionFact extends Model
{
    use SoftDeletes;

    public $table = 't0506_food_nutrition_fact';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'id', 'food_id', 'nutrient_id', 'amount'
    ];
}