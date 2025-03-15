<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

//model class of Product Table
class Product extends Model{
    protected $fillable = [
        'name',
        'qty',
        'regular_price',
        'sales_price',
        'thumbnail',
        'category_id',
        'color',
        'size',
        'description',
        'views'
    ];

    protected $table = 'products';
}