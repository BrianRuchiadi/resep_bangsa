<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use SoftDeletes;

    public $table = 't0903_notification';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'type', 'notifiable_id', 'notifiable_type', 'data', 'read_at'
    ];
}