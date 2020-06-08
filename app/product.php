<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\unite;
use App\category;
use App\supplier;

class product extends Model
{

  protected $fillable=[
    'category_id','supplier_id','unite_id','Product_price','product_name','total_stock','sell_quantity','product_image','product_status'
  ];


  public function category(){
    return $this->belongsTo(category::class);
  }


  public function supplier(){
    return $this->belongsTo(supplier::class);
  }


  public function unite(){
    return $this->belongsTo(unite::class);
  }


}
