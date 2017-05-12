<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class ClothingTransaction extends Model
{
    use SoftDeletes;

    public $table = 't0701_clothing_transaction';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'user_id', 
        'currency', 
        'quantity', 
        'amount',
        'status',
        'shipping_status',
        'shipping_address',
        'shipping_fee',
        'tax',
        'discount',
        'grand_amount',
        'sender_name',
        'sender_phone_no',
        'sender_email',
        'sender_address',
        'recipient_name',
        'recipient_phone_no',
        'recipient_email'
    ];
}