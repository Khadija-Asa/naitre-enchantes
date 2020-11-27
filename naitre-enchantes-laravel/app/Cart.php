<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'products';
    protected $guarded = ['id'];
    protected $fillable = [
      'customer_id'
    ];
}