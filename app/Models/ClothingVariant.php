<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class ClothingVariant extends Model
{
    use SoftDeletes;

    public $table = 't0506_clothing_variant';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'clothing_print_material_id',
        'clothing_material_id',
        'clothing_print_dimension_id',
        'clothing_size_variant_id',
        'clothing_color_variant_id'
    ];
}