<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class ClothingProductPicture extends Model
{
    use SoftDeletes;

    public $table = 't0602_clothing_product_picture';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'clothing_product_id', 'clothing_variant_id', 'path', 'status'
    ];
}