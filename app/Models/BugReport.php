<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class BugReport extends Model
{
    use SoftDeletes;

    public $table = 't0908_bug_report';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'name', 'status_code', 'message' , 'status'
    ];
}