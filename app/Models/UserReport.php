<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class UserReport extends Model
{
    use SoftDeletes;

    public $table = 't0901_user_report';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'report_type_id', 'reported_by', 'description', 'is_read'
    ];
}