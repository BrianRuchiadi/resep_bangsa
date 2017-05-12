<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class FoodRecipeOverview extends Model
{
    use SoftDeletes;

    public $table = 't0602_food_recipe_overview';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'food_recipe_id',
        'overview_1_header',
        'overview_2_header',
        'overview_3_header',
        'overview_4_header',
        'overview_1',
        'overview_2',
        'overview_3',
        'overview_4'
    ];
}