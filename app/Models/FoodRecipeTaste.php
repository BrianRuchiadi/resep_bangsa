<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class FoodRecipeTaste extends Model
{
    use SoftDeletes;

    public $table = 't0605_food_recipe_taste';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'food_recipe_id', 'spicy', 'sweet', 'sour', 'bitter'
    ];
}