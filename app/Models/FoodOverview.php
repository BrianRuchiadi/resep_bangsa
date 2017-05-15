<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class FoodOverview extends Model
{
    use SoftDeletes;

    public $table = 't0502_food_overview';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'food_id',
        'overview_1_header',
        'overview_2_header',
        'overview_1',
        'overview_2'
    ];
}