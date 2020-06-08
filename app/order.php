<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\customer;
use App\payment;

class order extends Model
{
    protected $fillable=[
      'customer_id','payment_id','phone','special_code',
    ];

    public function customer(){
      return $this->belongsTo(customer::class);
    }

    public function payment(){
      return $this->belongsTo(payment::class);
    }
}
