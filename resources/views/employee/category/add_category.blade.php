@extends('employee_dashbord')
@section('employee_content')
<br><br>
 <section class="">

   <div class="row justify-content-center ">
     <div class="col-md-8  bg-light">
<a style="background-color: #138D75; " class="btn text-light" href="{{route('employee.category.view')}}"><span class="mr-1"><i class="fas fa-th-list"></i></span> <strong> View All Category</strong> </a>


       <h3 class="text-center text-light bg-info mt-1">Add Category</h3>
       <form class="" action="{{route('employee.category.store')}}" method="post">
        @csrf
       <div class="row">
         <div class=" col-md-6 form-group">
           <label for="">Enter Category Name</label>
           <input class="form-control" type="text" name="category_name" placeholder="Enter Category Name" value="">
         </div>

           <input class="form-control" type="hidden" name="category_status"  value="0">

       </div>

       <div class="float-right text-center">
         <button class="btn btn-info" type="submit" name="button"><span class="mr-1"><i class="fas fa-plus-square"></i></span> Add Category</button>
       </div>
        </form>
     </div>


   </div>
 </section>

@endsection
