<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartProduct extends Model
{
    protected $table = 'products';
    protected $guarded = ['id'];
    protected $fillable = [
      'quantity', 'product_id', 'cart_id'
    ];
}