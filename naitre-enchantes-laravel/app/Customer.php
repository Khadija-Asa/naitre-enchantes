<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'users';
    protected $guarded = ['id'];
    protected $fillable = [
      'name', 'surname', 'company_name', 'address', 'entrance', 'post_code', 'city', 'phone_number', 'email'
    ];
}