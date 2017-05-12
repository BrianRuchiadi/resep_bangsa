<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class ClothingSizeVariant extends Model
{
    use SoftDeletes;

    public $table = 't0504_clothing_size_variant';
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