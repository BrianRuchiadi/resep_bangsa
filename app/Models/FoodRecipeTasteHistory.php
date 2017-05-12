<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class FoodRecipeTasteHistory extends Model
{
    use SoftDeletes;

    public $table = 't0608_food_recipe_taste_history';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'food_recipe_id', 'liked_by', 'spicy', 'sweet', 'sour', 'bitter'
    ];
}