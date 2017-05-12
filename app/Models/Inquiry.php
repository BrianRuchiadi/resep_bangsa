<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    use SoftDeletes;

    public $table = 't0903_inquiry';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'inquired_by', 'description', 'is_read'
    ];
}