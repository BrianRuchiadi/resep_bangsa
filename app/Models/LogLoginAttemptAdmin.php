<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class LogLoginAttemptAdmin extends Model
{
    use SoftDeletes;

    public $table = 't0904_log_login_attempt_admin';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'admin_id',
        'email',
        'status'
    ];
}