@extends('manager_dashbord')
@section('manager_content')


<table class="table">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">customer Name</th>
      <th scope="col">Customer Phone</th>
      <th scope="col">Customer address</th>
      <th scope="col">Total ammount</th>
      <th scope="col">Total Due</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $total_ammount=0; $total_due=0; ?>
    @foreach($month_order as $v_month)
    <tr>
      <th>{{$loop->index +1}}</th>
      <td>{{$v_month->customer->customer_name}}</td>
      <td>{{$v_month->customer->customer_phone}}</td>
      <td>{{$v_month->customer->customer_address}}</td>
      <td>{{$v_month->total_ammount}}</td>
      <?php
        $total_ammount +=$v_month->total_ammount;
        $total_due +=$v_month->due;
       ?>
      <td>{{$v_month->due}}</td>
      <td>
        <a href="{{url('manager/order/report/order/'.$v_month->id)}}">View</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<div class="float-right  mr-5 ">
  <strong>Month Ammount:{{$total_ammount}}Tk</strong><br>
  <strong>Month Due:{{$total_due}}Tk</strong><br>
  <a class="btn btn-info" href="{{route('manager.pdf.month_report')}}">Download Pdf</a>
</div>

@endsection
