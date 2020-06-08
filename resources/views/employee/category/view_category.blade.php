@extends('employee_dashbord')
@section('employee_content')
<br><br>
<section>
  <div class="row justify-content-center">
    <div class="col-md-10">

<a class="btn btn-info float-right" href="{{route('employee.category.add')}}"><i class="fas fa-plus-square"></i> Add Category</a>

      <table class="table table-striped">
  <thead style="background-color: #5D6D7E; color: white;">
    <tr>
      <th scope="col">Sl</th>
      <th scope="col">Category Name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($all_category as $v_category)
      <tr>
        <td>#C{{$loop->index +1}}</td>
        <td>{{$v_category->category_name}}</td>
        <td>
            @if($v_category->category_status==1)
                  <a href="{{URL::to('employee/category/unactive/'.$v_category->id)}}"><span class="text-success h5"><i class="fas fa-hand-point-up"></i></span></a>
            @else
                  <a href="{{URL::to('employee/category/active/'.$v_category->id)}}"><span class="text-warning h5"><i class="fas fa-hand-point-down"></i></span></a>
            @endif
            <a class="text-info h5" href="{{URL::to('employee/category/edite/'.$v_category->id)}}"><i class="fas fa-edit"></i>e</a>
            <a class="text-danger h5" href="{{URL::to('employee/category/delete/'.$v_category->id)}}"><i class="fas fa-trash-alt"></i>d</a>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
    </div>
  </div>
</section>
@endsection
