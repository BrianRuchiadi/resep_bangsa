<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class ClothingBasePrice extends Model
{
    use SoftDeletes;

    public $table = 't0605_clothing_base_price';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'clothing_variant_id', 'currency', 'price'
    ];
}