<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class PasswordResetsUser extends Model
{
    use SoftDeletes;

    public $table = 't0902_password_resets_user';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'email', 'token'
    ];
}