<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class ClothingPageView extends Model
{
    use SoftDeletes;

    public $table = 't0604_clothing_page_view';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'clothing_product_id', 'page_view', 'last_update'
    ];
}