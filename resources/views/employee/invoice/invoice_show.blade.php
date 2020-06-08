@extends('employee_dashbord')
@section('employee_content')

      <section>
        <div class="">
          <table class="table">
        <thead>
          <tr>
            <th scope="col">SL</th>
            <th scope="col">Customer Name</th>
            <th scope="col">Cutomer Phone</th>
            <th scope="col">total Ammout</th>
            <th scope="col">Due</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach(App\order::latest()->get() as $v_order)
          <tr>
            <th>{{$loop->index +1}}</th>
            <td>{{$v_order->customer->customer_name}}</td>
            <td>{{$v_order->customer->customer_phone}}</td>
            <td>{{$v_order->total_ammount}}</td>
            <td>{{$v_order->due}}</td>
            <td>
              <a class="btn btn-info" href="{{url('employee/order/single_view/'.$v_order->id)}}">View</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
        </div>
      </section>


@endsection
