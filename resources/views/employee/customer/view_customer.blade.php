@extends('employee_dashbord')
@section('employee_content')
<br><br>
<section>
  <div class="row justify-content-center">
    <div class="col-md-10">

<a class="btn btn-info float-right" href="{{route('employee.customer.add')}}"><i class="fas fa-plus-square"></i> Add Customer</a>

      <table class="table table-striped">
  <thead style="background-color: #5D6D7E; color: white;">
    <tr>
      <th scope="col">Sl</th>
      <th scope="col">Supplier Name</th>
      <th scope="col">Supplier Phone</th>
      <th scope="col">Supplier Address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($all_customer as $v_customer)
    <tr>
      <th scope="row">#C{{$loop->index +1}}</th>
      <td>{{$v_customer->customer_name}}</td>
      <td>{{$v_customer->customer_phone}}</td>
      <td>{{$v_customer->customer_address}}</td>
      <td>
          @if($v_customer->customer_status==1)
                <a href="{{URL::to('employee/customer/unactive/'.$v_customer->id)}}"><span class="text-success h5"><i class="fas fa-hand-point-up"></i></span></a>
          @else
                <a href="{{URL::to('employee/customer/active/'.$v_customer->id)}}"><span class="text-warning h5"><i class="fas fa-hand-point-down"></i></span></a>
          @endif
          <a class="text-info h5" href="{{URL::to('employee/customer/edite/'.$v_customer->id)}}"><i class="fas fa-edit"></i></a>
          <a class="text-danger h5" href="{{URL::to('employee/customer/delete/'.$v_customer->id)}}"><i class="fas fa-trash-alt"></i></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
    </div>
  </div>
</section>
@endsection
