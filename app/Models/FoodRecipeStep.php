<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class FoodRecipeStep extends Model
{
    use SoftDeletes;

    public $table = 't0603_food_recipe_step';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'food_recipe_id', 'step'
    ];
}