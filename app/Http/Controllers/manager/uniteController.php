<?php

namespace App\Http\Controllers\manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\unite;

class uniteController extends Controller
{
  public function view(){
    $all_unite=unite::latest()->get();
    return view('manager.unite.view_unite',compact('all_unite'));
  }


  public function add(){
    return view('manager.unite.add_unite');
  }


  public function store(Request $request){
    $unite=new unite;
      $unite['unite_name']=$request->unite_name;
      $unite['unite_status']=$request->unite_status;
    $unite->save();
    return bacK();
  }



  public function unactive($id){
    $unactive=unite::find($id);
      $unactive['unite_status']=0;
    $unactive->save();
    return back();
  }



  public function active($id){
    $active=unite::find($id);
      $active['unite_status']=1;
    $active->save();
    return back();
  }



  public function edite($id){
    $edite=unite::find($id);
      return view('manager.unite.edite',compact('edite'));
  }





  public function update(Request $request,$id){
    $unite_update=unite::find($id);
      $unite_update['unite_name']=$request->unite_name;
      $unite_update['unite_status']=$request->unite_status;
    $unite_update->save();
    return redirect()->route('manager.unite.view');
  }




  public function delete($id){
    $delete=unite::find($id);
      $delete->delete();
    return back();
  }

}
