@extends('manager_dashbord')
@section('manager_content')
<br><br>
<section>
  <div class="row justify-content-center">
    <div class="col-md-10">

<a class="btn btn-info float-right" href="{{route('manager.unite.add')}}"><i class="fas fa-plus-square"></i> Add Unite</a>

      <table class="table table-striped">
  <thead style="background-color: #5D6D7E; color: white;">
    <tr>
      <th scope="col">Sl</th>
      <th scope="col">Unite Name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      @foreach($all_unite as $v_unite)
        <tr>
          <td>#u{{$loop->index +1}}</td>
          <td>{{$v_unite->unite_name}}</td>
          <td>
              @if($v_unite->unite_status==1)
                    <a href="{{URL::to('manager/unite/unactive/'.$v_unite->id)}}"><span class="text-success h5"><i class="fas fa-hand-point-up"></i></span></a>
              @else
                    <a href="{{URL::to('manager/unite/active/'.$v_unite->id)}}"><span class="text-warning h5"><i class="fas fa-hand-point-down"></i></span></a>
              @endif
              <a class="text-info h5" href="{{URL::to('manager/unite/edite/'.$v_unite->id)}}"><i class="fas fa-edit"></i></a>
              <a class="text-danger h5" href="{{URL::to('manager/unite/delete/'.$v_unite->id)}}"><i class="fas fa-trash-alt"></i></a>
          </td>
        </tr>
      @endforeach
  </tbody>
</table>
    </div>
  </div>
</section>
@endsection
