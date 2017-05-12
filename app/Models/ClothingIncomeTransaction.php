<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class ClothingIncomeTransaction extends Model
{
    use SoftDeletes;

    public $table = 't0704_clothing_income_transaction';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'name', 'clothing_transaction_id', 'currency', 'amount'
    ];
}