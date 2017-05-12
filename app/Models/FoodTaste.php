<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class FoodTaste extends Model
{
    use SoftDeletes;

    public $table = 't0505_food_taste';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'id', 'food_id', 'spicy', 'sweet', 'sour', 'bitter'
    ];
}