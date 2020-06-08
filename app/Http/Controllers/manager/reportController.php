<?php

namespace App\Http\Controllers\manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\order;
use App\customer;

class reportController extends Controller
{
      public function today(){
        $today_order = order::whereDate('created_at',Carbon::today())->get();
        return view('manager.report.today_report',compact('today_order'));
      }


      public function yesterday(){
        $yesterday = order::whereDate('created_at', carbon::yesterday())->get();
        return view('manager.report.yesterday_report',compact('yesterday'));
      }




      public function week(){
        $week = order::whereBetween('created_at', [Carbon::now()->startOfWeek(),Carbon::now()->endOfWeek()])->get();
        return view('manager.report.week',compact('week'));
      }


      public function month(){
        $month_order = order::whereMonth('created_at', date('m'))->get();
        return view('manager.report.month_report',compact('month_order'));
      }



}
