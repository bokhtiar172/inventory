@extends('manager_dashbord')
@section('manager_content')
<br><br>
 <section class="">

   <div class="row justify-content-center ">
     <div class="col-md-8  bg-light">
<a style="background-color: #138D75; " class="btn text-light" href="{{route('manager.employee.view')}}"><span class="mr-1"><i class="fas fa-th-list"></i></span> <strong> View All employee</strong> </a>


       <h3 class="text-center text-light bg-info mt-1">Edite employee Info</h3>
       <form class="" action="{{url('manager/employee/update/'.$edite->id)}}" method="post">
        @csrf
       <div class="row">
         <div class=" col-md-6 form-group">
           <label for="">Edite employee Name</label>
           <input class="form-control" type="text" name="employee_name" placeholder="Edite employee Name" value="{{$edite
           ->employee_name}}">
         </div>
         <div class="col-md-6 form-group">
           <label for="">Edite employee Phone Number</label>
           <input class="form-control" type="text" name="employee_phone" placeholder="Edite employee Phone number" value="{{$edite->employee_phone}}">
         </div>

           <input class="form-control" type="hidden" name="employee_status"  value="1">

       </div>
       <textarea class="form-control" placeholder="Edite employee Address" name="employee_address" rows="8" cols="80">{{$edite->employee_address}}</textarea>
       <div class="float-right text-center">
         <button class="btn btn-info" type="submit" name="update_button"><span class="mr-1"><i class="fas fa-edit"></i></span> Update employee</button>
       </div>
        </form>
     </div>


   </div>
 </section>

@endsection
