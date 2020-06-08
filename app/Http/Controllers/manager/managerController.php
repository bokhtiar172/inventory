<?php

namespace App\Http\Controllers\manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\customer;
use App\employee;
use App\supplier;
use App\unite;
use App\category;
use App\product;
use App\order;

class managerController extends Controller
{
  public function index(){
    $employee=employee::all()->count();
    $customer=customer::all()->count();
    $unite=unite::all()->count();
    $supplier=supplier::all()->count();
    $category=category::all()->count();
    $product=product::all()->count();
    $today=order::whereDate('created_at',Carbon::today())->get();
    $yesterday=order::whereDate('created_at', carbon::yesterday())->get();
    $week=order::whereBetween('created_at', [Carbon::now()->startOfWeek(),Carbon::now()->endOfWeek()])->get();
    $month_order=order::whereMonth('created_at', date('m'))->get();
    return view('manager.home',compact('employee','customer','unite','supplier','category','product','today','yesterday','week','month_order'));
  }
}
