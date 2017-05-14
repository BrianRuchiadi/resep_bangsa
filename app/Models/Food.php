<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use SoftDeletes;

    public $table = 't0501_food';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'name', 'picture', 'used_in', 'verified', 'is_active', 'location_id'
    ];
}