<?php

namespace App\Http\Controllers\employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\product;

class posController extends Controller
{
    public function view(){
      $all_product=product::latest()->get();
      return view('employee.pos.view_pos',compact('all_product'));
    }
}
