<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class IngredientHistory extends Model
{
    use SoftDeletes;

    public $table = 't0402_ingredient_history';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'updated_by', 'justification', 'reviewed'
    ];
}