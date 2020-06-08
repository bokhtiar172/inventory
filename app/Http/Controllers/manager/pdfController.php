<?php

namespace App\Http\Controllers\manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\order;
use PDF;
use Carbon\carbon;

class pdfController extends Controller
{
    public function today_report(){
        $today_order = order::whereDate('created_at',Carbon::today())->get();
        $pdf = PDF::loadView('manager.pdf.today_report', compact('today_order') );
          return $pdf->download('today.pdf');
    }


    public function month_report(){
      $month_order = order::whereMonth('created_at', date('m'))->get();
      $pdf = PDF::loadView('manager.pdf.month_report', compact('month_order') );
        return $pdf->download('month.pdf');
    }


    public function week_report(){
      $week = order::whereBetween('created_at', [Carbon::now()->startOfWeek(),Carbon::now()->endOfWeek()])->get();
      $pdf = PDF::loadView('manager.pdf.week', compact('week') );
        return $pdf->download('week.pdf');
    }

    public function yesterday_report(){
      $yesterday = order::whereDate('created_at', carbon::yesterday())->get();
      $pdf = PDF::loadView('manager.pdf.yesterday_report', compact('yesterday') );
        return $pdf->download('yesterday.pdf');
    }
}
