@extends('employee_dashbord')
@section('employee_content')
<br><br>
 <section class="">

   <div class="row justify-content-center ">
     <div class="col-md-8  bg-light">
<a style="background-color: #138D75; " class="btn text-light" href="{{route('employee.supplier.view')}}"><span class="mr-1"><i class="fas fa-th-list"></i></span> <strong> View All Supplier</strong> </a>


       <h3 class="text-center text-light bg-info mt-1">Edite Supplier Info</h3>
       <form class="" action="{{url('employee/supplier/update/'.$edite->id)}}" method="post">
        @csrf
       <div class="row">
         <div class=" col-md-6 form-group">
           <label for="">Edite Supplier Name</label>
           <input class="form-control" type="text" name="supplier_name" placeholder="Edite Supplier Name" value="{{$edite
           ->supplier_name}}">
         </div>
         <div class="col-md-6 form-group">
           <label for="">Edite Supplier Phone Number</label>
           <input class="form-control" type="text" name="supplier_phone" placeholder="Edite Supplier Phone number" value="{{$edite->supplier_phone}}">
         </div>

           <input class="form-control" type="hidden" name="supplier_status"  value="0">

       </div>
       <textarea class="form-control" placeholder="Edite Supplier Address" name="supplier_address" rows="8" cols="80">{{$edite->supplier_address}}</textarea>
       <div class="float-right text-center">
         <button class="btn btn-info" type="submit" name="update_button"><span class="mr-1"><i class="fas fa-plus-square"></i></span> Update Supplier</button>
       </div>
        </form>
     </div>


   </div>
 </section>

@endsection
