<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class LogPageUpdate extends Model
{
    use SoftDeletes;

    public $table = 't0910_log_page_update';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'page_detail_id', 'admin_id', 'description'
    ];
}