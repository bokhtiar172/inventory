@extends('manager_dashbord')
@section('manager_content')
<br><br>
 <section class="">

   <div class="row justify-content-center ">
     <div class="col-md-8  bg-light">
<a style="background-color: #138D75; " class="btn text-light" href="{{route('manager.unite.view')}}"><span class="mr-1"><i class="fas fa-th-list"></i></span> <strong> View All Unite</strong> </a>


       <h3 class="text-center text-light bg-info mt-1">Edite unite</h3>
       <form class="" action="{{url('manager/unite/update/'.$edite->id)}}" method="post">
        @csrf
       <div class="row">
         <div class=" col-md-6 form-group">
           <label for="">Enter unite Name</label>
           <input class="form-control" type="text" name="unite_name" placeholder="Enter unite Name" value="{{$edite->unite_name}}">
         </div>

           <input class="form-control" type="hidden" name="unite_status"  value="1">

       </div>

       <div class="float-right text-center">
         <button class="btn btn-info" type="submit" name="button"><span class="mr-1"><i class="fas fa-edit"></i></span> Update unite</button>
       </div>
        </form>
     </div>


   </div>
 </section>

@endsection
