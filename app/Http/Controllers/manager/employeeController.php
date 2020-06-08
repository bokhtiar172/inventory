<?php

namespace App\Http\Controllers\manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\employee;


class employeeController extends Controller
{

      public function view(){
        $all_employee=employee::all();
        return view('manager.employee.view_employee',compact('all_employee'));
      }


      public function add(){
        return view('manager.employee.add_employee');
      }


      public function store(Request $request){
        $employee=new employee;
          $employee['employee_name']=$request->employee_name;
          $employee['employee_phone']=$request->employee_phone;
          $employee['employee_address']=$request->employee_address;
          $employee['employee_status']=$request->employee_status;
        $employee->save();
        return bacK();
      }



      public function unactive($id){
        $unactive=employee::find($id);
          $unactive['employee_status']=0;
        $unactive->save();
        return back();
      }



      public function active($id){
        $active=employee::find($id);
          $active['employee_status']=1;
        $active->save();
        return back();
      }




      public function edite($id){
        $edite=employee::find($id);
          return view('manager.employee.edite',compact('edite'));
      }




      public function update(Request $request,$id){
        $employee_update=employee::find($id);
          $employee_update['employee_name']=$request->employee_name;
          $employee_update['employee_phone']=$request->employee_phone;
          $employee_update['employee_address']=$request->employee_address;
          $employee_update['employee_status']=$request->employee_status;
        $employee_update->save();
        return redirect()->route('manager.employee.view');
      }




      public function delete($id){
        $delete=employee::find($id);
          $delete->delete();
        return back();
      }
}
