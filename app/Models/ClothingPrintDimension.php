<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class ClothingPrintDimension extends Model
{
    use SoftDeletes;

    public $table = 't0503_clothing_print_dimension';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'code_name', 'display_name', 'length', 'width'
    ];
}