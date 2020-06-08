<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $fillable=[
      'customer_name', 'customer_phone','customer_address','customer_status'
    ];
}
