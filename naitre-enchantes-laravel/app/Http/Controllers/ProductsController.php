<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Products;

class ProductsController extends Controller
{
    protected $table = 'products';
    protected $guarded = ['id'];
    protected $fillable = [
        'product_id', 'name', 'price'
    ];
}