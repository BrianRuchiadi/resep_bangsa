<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class FoodRecipe extends Model
{
    use SoftDeletes;

    public $table = 't0601_food_recipe';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'user_id',
        'food_id',
        'verified',
        'is_active'
    ];
}