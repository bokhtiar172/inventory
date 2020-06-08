<?php

namespace App\Http\Controllers\employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\product;
use App\cart;

class cartController extends Controller
{
    public function store(Request $request,$id){
      $cart=new cart;
      $cart['product_id']=$id;
      $cart['quantity']=$request->quantity;
      $cart['ip_address']=request()->ip();

      $stock=product::find($id);
        $stock['sell_quantity']=$request->quantity+$stock['sell_quantity'];
        $stock->save();


      $cart->save();
      return back();
    }


    public function cart_update(Request $request,$id){


      $cart_update=cart::find($id);
        $cart_update['quantity']=$request->quantity;
        $cart_update->save();


      return back();
    }



    public function cart_delete($id){
      $delete_cart=cart::find($id);
        $delete_cart->delete();
      return back();
    }




}
