<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class ClothingTransactionDetail extends Model
{
    use SoftDeletes;

    public $table = 't0702_clothing_transaction_detail';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'clothing_transaction_id',
        'clothing_product_id',
        'currency',
        'quantity',
        'amount',
        'grand_amount',
        'status'
    ];
}