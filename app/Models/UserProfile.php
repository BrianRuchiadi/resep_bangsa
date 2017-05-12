<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use SoftDeletes;

    public $table = 't0104_user_profile';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'user_id', 'fullname', 'gender', 'dob', 'contact_no', 'address', 'state', 'country'
    ];
}