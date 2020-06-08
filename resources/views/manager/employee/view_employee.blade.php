@extends('manager_dashbord')
@section('manager_content')
<br><br>
<section>
  <div class="row justify-content-center">
    <div class="col-md-10">

<a class="btn btn-info float-right" href="{{route('manager.employee.add')}}"><i class="fas fa-plus-square"></i> Add Employee</a>

      <table class="table table-striped">
  <thead style="background-color: #5D6D7E; color: white;">
    <tr>
      <th scope="col">Sl</th>
      <th scope="col">Employee Name</th>
      <th scope="col">Employee Phone</th>
      <th scope="col">Employee Address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      @foreach($all_employee as $v_employee)
        <tr>
          <td>{{$loop->index +1}}</td>
          <td>{{$v_employee->employee_name}}</td>
          <td>{{$v_employee->employee_phone}}</td>
          <td>{{$v_employee->employee_address}}</td>
          <td>
              @if($v_employee->employee_status==1)
                    <a href="{{URL::to('manager/employee/unactive/'.$v_employee->id)}}"><span class="text-success h5"><i class="fas fa-hand-point-up"></i></span></a>
              @else
                    <a href="{{URL::to('manager/employee/active/'.$v_employee->id)}}"><span class="text-warning h5"><i class="fas fa-hand-point-down"></i></span></a>
              @endif
              <a class="text-info h5" href="{{URL::to('manager/employee/edite/'.$v_employee->id)}}"><i class="fas fa-edit"></i></a>
              <a class="text-danger h5" href="{{URL::to('manager/employee/delete/'.$v_employee->id)}}"><i class="fas fa-trash-alt"></i></a>
          </td>
        </tr>
      @endforeach
  </tbody>
</table>
    </div>
  </div>
</section>
@endsection
