@extends('employee_dashbord')
@section('employee_content')
<br><br>

<?php

?>


<div class="row">
  <div class="col-md-6 pl-5"><br>
    <h4 class="">Customer Info</h4>
    <span><strong>Customer Name:</strong>{{$single->customer->customer_name}} </span><br>
    <span><strong>Customer Phone</strong>{{$single->customer->customer_phone}}  </span><br>
    <span><strong>Customer Address</strong>{{$single->customer->customer_address}}  </span>
  </div>
<br><br>
  <div class="col-md-6 pl-5"><br>
    <h4>Payment Info</h4>
    <span><strong>Payment:</strong>{{$single->payment->payment_name}} </span><br>
    <span><strong>Customer Phone</strong>{{$single->customer->customer_phone}}  </span><br>
    <span><strong>Customer Address</strong>{{$single->customer->customer_address}}  </span><br>
    <span><strong>Total Ammount</strong>{{$single->total_ammount}} Taka  </span><br>
    <span><strong>{{$single->customer->customer_name}} <span class="ml-1">Due</span> </strong>{{$single->due}}Taka  </span>
  </div>
</div>


<br><br><br>
      <table class="table ">
        <thead class="text-center">
          <tr>
            <th scope="col">SL</th>
            <th scope="col">Product Category</th>
            <th scope="col">Product Name</th>
            <th scope="col">Product Price</th>
            <th scope="col">Product Image</th>
          </tr>
        </thead>
        <tbody class="text-center">
          @foreach($cart as $v)
          <tr>
            <th scope="row">{{$loop->index +1}}</th>
            <td>{{$v->product->category->category_name}}</td>
            <td>{{$v->product->product_name}}</td>
            <td>{{$v->product->product_price}}</td>
            <td><img height="50px" width="50px;" src="{{asset($v->product->product_image)}}" alt="">  </td>
            <td></td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <div class="float-right mr-5">
        <span><strong>Total Ammount</strong>{{$single->total_ammount}} Taka  </span><br>
        <span><strong><span class="ml-1">Total Due</span> </strong>{{$single->due}}Taka  </span>
      </div><br><br>

      <div class="">
        <a class="btn btn-info" class="text-center " href="{{url('employee/pdf/'.$single->id)}}">Download</a>
        <a class="btn btn-success" href="#">Back To Pos</a>
      </div>


@endsection
