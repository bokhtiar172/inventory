@extends('manager_dashbord')
@section('manager_content')
<br><br>
 <section class="">

   <div class="row justify-content-center ">
     <div class="col-md-8  bg-light">
<a style="background-color: #138D75; " class="btn text-light" href="{{route('manager.unite.view')}}"><span class="mr-1"><i class="fas fa-th-list"></i></span> <strong> View All Unite</strong> </a>


       <h3 class="text-center text-light bg-info mt-1">Add unite</h3>
       <form class="" action="{{route('manager.unite.store')}}" method="post">
        @csrf
       <div class="row">
         <div class=" col-md-6 form-group">
           <label for="">Enter unite Name</label>
           <input class="form-control" type="text" name="unite_name" placeholder="Enter unite Name" value="">
         </div>

           <input class="form-control" type="hidden" name="unite_status"  value="1">

       </div>

       <div class="float-right text-center">
         <button class="btn btn-info" type="submit" name="button"><span class="mr-1"><i class="fas fa-plus-square"></i></span> Add unite</button>
       </div>
        </form>
     </div>


   </div>
 </section>

@endsection
