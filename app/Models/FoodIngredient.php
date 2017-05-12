<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class FoodIngredient extends Model
{
    use SoftDeletes;

    public $table = 't0504_food_ingredient';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'food_id', 'ingredient_id'
    ];
}