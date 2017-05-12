<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use SoftDeletes;

    public $table = 't0401_ingredient';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'name', 'picture', 'used_in', 'verified', 'is_active'
    ];
}