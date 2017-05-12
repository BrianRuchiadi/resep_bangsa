<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class PageDetail extends Model
{
    use SoftDeletes;

    public $table = 't0909_page_detail';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'permission', 'description', 'file_name', 'file_location'
    ];
}