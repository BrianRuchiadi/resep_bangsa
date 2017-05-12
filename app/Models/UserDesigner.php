<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class UserDesigner extends Model
{
    use SoftDeletes;

    public $table = 't0112_user_designer';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'user_id', 'designer_class_id', 'current_point', 'accumulated_point', 'profile_picture', 'is_activated'
    ];
}