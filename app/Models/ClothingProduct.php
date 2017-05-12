<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class ClothingProduct extends Model
{
    use SoftDeletes;

    public $table = 't0601_clothing_product';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'name', 'user_designer_id', 'status'
    ];
}