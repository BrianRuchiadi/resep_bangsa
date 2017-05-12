<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class PasswordResetsAdmin extends Model
{
    use SoftDeletes;

    public $table = 't0901_password_resets_admin';
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