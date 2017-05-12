<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class DesignerClaimTransaction extends Model
{
    use SoftDeletes;

    public $table = 't0703_designer_claim_transaction';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'user_designer_id',
        'currency',
        'amount_claimed',
        'designer_point_transaction_id',
        'status',
        'requested_at'
    ];
}