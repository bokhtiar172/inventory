@extends('manager_dashbord')
@section('manager_content')
<br><br>
 <section class="">

   <div class="row justify-content-center ">
     <div class="col-md-8  bg-light">
<a style="background-color: #138D75; " class="btn text-light" href="{{route('manager.employee.view')}}"><span class="mr-1"><i class="fas fa-th-list"></i></span> <strong> View All Employee</strong> </a>


       <h3 class="text-center text-light bg-info mt-1">Add Employee</h3>
       <form class="" action="{{route('manager.employee.store')}}" method="post">
        @csrf
       <div class="row">
         <div class=" col-md-6 form-group">
           <label for="">Enter Employee Name</label>
           <input class="form-control" type="text" name="employee_name" placeholder="Enter Employee Name" value="">
         </div>
         <div class="col-md-6 form-group">
           <label for="">Enter Employee Phone Number</label>
           <input class="form-control" type="text" name="employee_phone" placeholder="Enter Employee Phone number" value="">
         </div>

           <input class="form-control" type="hidden" name="employee_status"  value="1">

       </div>
       <textarea class="form-control" placeholder="Enter Employee Address" name="employee_address" rows="8" cols="80"></textarea>
       <div class="float-right text-center">
         <button class="btn btn-info" type="submit" name="button"><span class="mr-1"><i class="fas fa-plus-square"></i></span> Add Employee</button>
       </div>
        </form>
     </div>


   </div>
 </section>

@endsection
