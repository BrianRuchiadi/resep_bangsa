<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class FoodLikeHistory extends Model
{
    use SoftDeletes;

    public $table = 't0509_food_like_history';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'food_id', 'liked_by'
    ];
}