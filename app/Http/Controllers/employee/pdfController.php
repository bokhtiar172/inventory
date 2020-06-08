<?php

namespace App\Http\Controllers\employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDF;
use App\cart;
use App\order;

class pdfController extends Controller
{ 
    public function index($id){
      $single=order::find($id);
      $cart=cart::where('order_id',$id)->get();
      $pdf = PDF::loadView('employee\invoice\pdf_single_view', compact('single','cart') );
        return $pdf->download('invoice\pdf_single_view.pdf');


    //  $pdf = PDF::loadView('employee.invoice.single_view'); //this is the page name in loadview(pdf_folder.pdf_file)

      //return $pdf->download('employee.invoice.single_view.pdf'); //.pdf extention of pdf
    }
}
