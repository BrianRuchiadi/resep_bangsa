<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class FoodRecipeLikeHistory extends Model
{
    use SoftDeletes;

    public $table = 't0607_food_recipe_like_history';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'food_recipe_id', 'liked_by'
    ];
}