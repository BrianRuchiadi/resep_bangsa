<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class FoodTasteHistory extends Model
{
    use SoftDeletes;

    public $table = 't0510_food_like_history';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'food_id',
        'liked_by',
        'spicy',
        'sour',
        'sweet',
        'bitter',
    ];
}