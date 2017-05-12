<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class LogInsert extends Model
{
    use SoftDeletes;

    public $table = 't0904_log_insert';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'user_type', 'user_id', 'user_email', 'table_name', 'table_id'
    ];
}