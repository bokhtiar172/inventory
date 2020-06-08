<?php

namespace App\Http\Controllers\employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\customer;


class customerController extends Controller
{
  public function view(){
    $all_customer=customer::all();
    return view('employee.customer.view_customer',compact('all_customer'));
  }


  public function add(){
    return view('employee.customer.add_customer');
  }


  public function store(Request $request){
    $customer=new customer;
      $customer['customer_name']=$request->customer_name;
      $customer['customer_phone']=$request->customer_phone;
      $customer['customer_address']=$request->customer_address;
      $customer['customer_status']=$request->customer_status;
    $customer->save();
    return bacK();
  }



  public function unactive($id){
    $unactive=customer::find($id);
      $unactive['customer_status']=0;
    $unactive->save();
    return back();
  }



  public function active($id){
    $active=customer::find($id);
      $active['customer_status']=1;
    $active->save();
    return back();
  }




  public function edite($id){
    $edite=customer::find($id);
      return view('employee.customer.edite',compact('edite'));
  }




  public function update(Request $request,$id){
    $customer_update=customer::find($id);
      $customer_update['customer_name']=$request->customer_name;
      $customer_update['customer_phone']=$request->customer_phone;
      $customer_update['customer_address']=$request->customer_address;
      $customer_update['customer_status']=$request->customer_status;
    $customer_update->save();
    return redirect()->route('employee.customer.view');
  }




  public function delete($id){
    $delete=customer::find($id);
      $delete->delete();
    return back();
  }

}
