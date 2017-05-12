<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class AdminType extends Model
{
    use SoftDeletes;

    public $table = 't0002_admin_type';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        't0001_permission',
        't0002_permission',
        't0101_permission',
        't0201_permission',
        't0202_permission',
        't0401_permission',
        't0402_permission',        
        't0501_permission',
        't0502_permission',
        't0503_permission',
        't0504_permission',
        't0505_permission',
        't0506_permission',
        't0507_permission',
        't0508_permission',
        't0509_permission',
        't0510_permission',
        't0601_permission',
        't0602_permission',
        't0603_permission',
        't0604_permission',
        't0605_permission',
        't0606_permission',
        't0607_permission',
        't0608_permission',
        't0901_permission',
        't0902_permission',
        't0903_permission',
        't0904_permission',
        't0905_permission',
    ];
}