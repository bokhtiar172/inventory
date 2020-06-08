<?php

namespace App\Http\Controllers\manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\supplier;

class supplierController extends Controller
{
    public function view(){
      $all_supplier=supplier::latest()->get();
      return view('manager.supplier.view_supplier',compact('all_supplier'));
    }


    public function add(){
      return view('manager.supplier.add_supplier');
    }


    public function store(Request $request){
      $supplier=new supplier;
        $supplier['supplier_name']=$request->supplier_name;
        $supplier['supplier_phone']=$request->supplier_phone;
        $supplier['supplier_address']=$request->supplier_address;
        $supplier['supplier_status']=$request->supplier_status;
      $supplier->save();
      $notification = array(
              'message' => 'Successfully Data Insert!',
              'alert-type' => 'success',
          );
      return back()->with($notification);
    }



    public function unactive($id){
      $unactive=supplier::find($id);
        $unactive['supplier_status']=0;
      $unactive->save();
      return back();
    }



    public function active($id){
      $active=supplier::find($id);
        $active['supplier_status']=1;
      $active->save();
      return back();
    }




    public function edite($id){
      $edite=supplier::find($id);
        return view('manager.supplier.edite',compact('edite'));
    }




    public function update(Request $request,$id){
      $supplier=supplier::find($id);
        $supplier['supplier_name']=$request->supplier_name;
        $supplier['supplier_phone']=$request->supplier_phone;
        $supplier['supplier_address']=$request->supplier_address;
        $supplier['supplier_status']=$request->supplier_status;
      $supplier->save();
      $notification = array(
              'message' => 'Successfully Data Insert!',
              'alert-type' => 'success',
          );
      return redirect()->route('manager.supplier.view')->with($notification);
    }



    public function delete($id){
      $delete=supplier::find($id);
          $delete->delete();
      return back();
    }
}
