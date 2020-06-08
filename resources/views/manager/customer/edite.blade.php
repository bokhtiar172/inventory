@extends('manager_dashbord')
@section('manager_content')
<br><br>
 <section class="">

   <div class="row justify-content-center ">
     <div class="col-md-8  bg-light">
<a style="background-color: #138D75; " class="btn text-light" href="{{route('manager.customer.view')}}"><span class="mr-1"><i class="fas fa-th-list"></i></span> <strong> View All Supplier</strong> </a>


       <h3 class="text-center text-light bg-info mt-1">Edite Customer Info</h3>
       <form class="" action="{{url('manager/customer/update/'.$edite->id)}}" method="post">
        @csrf
       <div class="row">
         <div class=" col-md-6 form-group">
           <label for="">Edite Customer Name</label>
           <input class="form-control" type="text" name="customer_name" placeholder="Edite customer Name" value="{{$edite
           ->customer_name}}">
         </div>
         <div class="col-md-6 form-group">
           <label for="">Edite customer Phone Number</label>
           <input class="form-control" type="text" name="customer_phone" placeholder="Edite customer Phone number" value="{{$edite->customer_phone}}">
         </div>

           <input class="form-control" type="hidden" name="customer_status"  value="1">

       </div>
       <textarea class="form-control" placeholder="Edite customer Address" name="customer_address" rows="8" cols="80">{{$edite->customer_address}}</textarea>
       <div class="float-right text-center">
         <button class="btn btn-info" type="submit" name="update_button"><span class="mr-1"><i class="fas fa-edit"></i></span> Update Customer</button>
       </div>
        </form>
     </div>


   </div>
 </section>

@endsection
