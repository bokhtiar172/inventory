@extends('employee_dashbord')
@section('employee_content')
<br><br>
<section>
  <div class="row justify-content-center">
    <div class="col-md-10">

<a class="btn btn-info float-right" href="{{route('employee.supplier.add')}}"><i class="fas fa-plus-square"></i> Add Supplier</a>

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
    @foreach($all_supplier as $v_supplier)
    <tr>
      <th scope="row">#S{{$loop->index +1}}</th>
      <td>{{$v_supplier->supplier_name}}</td>
      <td>{{$v_supplier->supplier_phone}}</td>
      <td>{{$v_supplier->supplier_address}}</td>
      <td>
          @if($v_supplier->supplier_status==1)
                <a href="{{URL::to('employee/supplier/unactive/'.$v_supplier->id)}}"><span class="text-success h5"><i class="fas fa-hand-point-up"></i></span></a>
          @else
                <a href="{{URL::to('employee/supplier/active/'.$v_supplier->id)}}"><span class="text-warning h5"><i class="fas fa-hand-point-down"></i></span></a>
          @endif
          <a class="text-info h5" href="{{URL::to('employee/supplier/edite/'.$v_supplier->id)}}"><i class="fas fa-edit"></i></a>
          <a class="text-danger h5" href="{{URL::to('employee/supplier/delete/'.$v_supplier->id)}}"><i class="fas fa-trash-alt"></i></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
    </div>
  </div>
</section>
@endsection
