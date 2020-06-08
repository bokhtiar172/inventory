<?php

namespace App\Http\Controllers\employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\cart;
use App\order;
use App\product;

class orderController extends Controller
{
    public function store(Request $request){
      $order=new order;
        $order['customer_id']=$request->customer_id;
        $order['payment_id']=$request->payment_id;
        $order['total_ammount']=$request->total_ammount;
        $order['due']=$request->due;
        $order['phone']=$request->phone;
        $order['special_code']=$request->special_code;
        $order->save();

        foreach (cart::total_cart_item() as $v_cart) {
              $v_cart['order_id']=$order->id;
              $v_cart->save();
        }


        return view('employee.invoice.invoice_show');
    }






    public function single_view($id){
      $single=order::find($id);
      $cart=cart::where('order_id',$id)->get();
        return view('employee.invoice.single_view',compact('single','cart'));
    }
}
