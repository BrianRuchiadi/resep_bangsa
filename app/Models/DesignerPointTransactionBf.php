<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class DesignerPointTransactionBf extends Model
{
    use SoftDeletes;

    public $table = 't0202_designer_point_transaction_bf';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'user_designer_id',
        'start_transaction_id',
        'end_transaction_id',
        'no_of_record',
        'amount',
        'transaction_period'
    ];
}