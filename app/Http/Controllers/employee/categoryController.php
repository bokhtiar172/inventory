<?php

namespace App\Http\Controllers\employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\category;

class categoryController extends Controller
{


      public function view(){
        $all_category=category::latest()->get();
        return view('employee.category.view_category',compact('all_category'));
      }


      public function add(){
        return view('employee.category.add_category');
      }


      public function store(Request $request){
        $category=new category;
          $category['category_name']=$request->category_name;
          $category['category_status']=$request->category_status;
        $category->save();
        return bacK();
      }



      public function unactive($id){
        $unactive=category::find($id);
          $unactive['category_status']=0;
        $unactive->save();
        return back();
      }



      public function active($id){
        $active=category::find($id);
          $active['category_status']=1;
        $active->save();
        return back();
      }



      public function edite($id){
        $edite=category::find($id);
          return view('employee.category.edite',compact('edite'));
      }





      public function update(Request $request,$id){
        $category_update=category::find($id);
          $category_update['category_name']=$request->category_name;
          $category_update['category_status']=$request->category_status;
        $category_update->save();
        return redirect()->route('employee.category.view');
      }




      public function delete($id){
        $delete=category::find($id);
          $delete->delete();
        return back();
      }


}
