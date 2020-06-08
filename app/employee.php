<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
  protected $fillable=[
    'employee_name', 'employee_phone','employee_address','employee_status'
  ];
}
