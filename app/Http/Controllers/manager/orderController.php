<?php

namespace App\Http\Controllers\manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\order;
use App\cart;
use Carbon\Carbon;
use App\customer;

class orderController extends Controller
{
    public function show ($id){
      $show_order=order::find($id);
        $show_cart=cart::where('order_id',$id)->get();
      return view('manager.order.show_order',compact('show_order','show_cart'));
    }



}
