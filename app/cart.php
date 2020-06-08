<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\product;
use App\customer;

class cart extends Model
{
    protected $fillable=[
      'product_id','order_id','ip_address','quantity','customer_id'
    ];

    public function product(){
      return $this->belongsTo(product::class);
    }

    public function customer(){
      return $this->belongsTo(customer::class);
    }


    public static function total_cart_number(){
          $total_number=cart::where('order_id',NULL)->count();
          return $total_number;
    }

    public static function total_cart_item(){
          $cart=cart::where('order_id',NULL)->get();
          return $cart;
    }


}
