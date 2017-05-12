<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class DesignerPointTransaction extends Model
{
    use SoftDeletes;

    public $table = 't0201_designer_point_transaction';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'user_designer_id',
        'type',
        'point',
        'sale_transaction_id',
        'description',
        'transacted_at'
    ];
}