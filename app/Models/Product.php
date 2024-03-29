<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table ='product';
    protected $fillable = [
        'cate_id',
        'slug',
        'name',
        'description',
        'orginal_price',
        'selling_price',
        'image',
        'quantity',
        'tax',
        'status',
        'trending',
    ];
}
