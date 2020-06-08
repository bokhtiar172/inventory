@extends('manager_dashbord')
@section('manager_content')
<br><br>
 <section class="">

   <div class="row justify-content-center ">
     <div class="col-md-8  bg-light">
<a style="background-color: #138D75; " class="btn text-light" href="{{route('manager.customer.view')}}"><span class="mr-1"><i class="fas fa-th-list"></i></span> <strong> View All Customer</strong> </a>


       <h3 class="text-center text-light bg-info mt-1">Add Customer</h3>
       <form class="" action="{{route('manager.customer.store')}}" method="post">
        @csrf
       <div class="row">
         <div class=" col-md-6 form-group">
           <label for="">Enter Customer Name</label>
           <input class="form-control" type="text" name="customer_name" placeholder="Enter Customer Name" value="">
         </div>
         <div class="col-md-6 form-group">
           <label for="">Enter customer Phone Number</label>
           <input class="form-control" type="text" name="customer_phone" placeholder="Enter Customer Phone number" value="">
         </div>

           <input class="form-control" type="hidden" name="customer_status"  value="1">

       </div>
       <textarea class="form-control" placeholder="Enter Customer Address" name="customer_address" rows="8" cols="80"></textarea>
       <div class="float-right text-center">
         <button class="btn btn-info" type="submit" name="button"><span class="mr-1"><i class="fas fa-plus-square"></i></span> Add Customer</button>
       </div>
        </form>
     </div>


   </div>
 </section>

@endsection
