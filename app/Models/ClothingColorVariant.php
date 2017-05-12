<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class ClothingColorVariant extends Model
{
    use SoftDeletes;

    public $table = 't0505_clothing_color_variant';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'name', 'color_1', 'color_2', 'color_3', 'color_4'
    ];
}