<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class ClothingIncomeTransactionBf extends Model
{
    use SoftDeletes;

    public $table = 't0705_clothing_income_transaction_bf';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'bf_at', 'currency', 'amount'
    ];
}