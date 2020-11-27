<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\Products;

class Product extends Model
{
    protected $table = 'products';
    protected $guarded = ['id'];
    protected $fillable = [
      'name', 'description', 'price' 
    ];
}
