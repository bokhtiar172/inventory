@extends('employee_dashbord')
@section('employee_content')

    <section>
      <div class="row justify-content-center"><!--start of releted info of product -->
        <div class="col-md-10">
          <a style="background-color: #138D75; " class=" btn text-light mt-4" href="{{route('employee.product.view')}}"><span class="mr-1"><i class="fas fa-th-list"></i></span> <strong> View All Product</strong> </a>

          <form class="" action="{{route('employee.product.store')}}" enctype="multipart/form-data" method="post">
            @csrf

          <h4 class="mt-4 bg-light text-info">Product Related Info</h4>
          <div class="row">
            <div class="col-md-4">
              <label class="font-weight-bold" for="">Sleect Category</label>
              <select class="form-control" name="category_id">
                @foreach($category as $v_cat)
                <option value="{{$v_cat->id}}">{{$v_cat->category_name}}</option>
                @endforeach
              </select>
            </div>

            <div class="col-md-4">
              <label class="font-weight-bold" for="">Sleect Supplier</label>
              <select class="form-control" name="supplier_id">
                @foreach($supplier as $v_sup)
                <option value="{{$v_sup->id}}">{{$v_sup->supplier_name}}</option>
                @endforeach
              </select>
            </div>

            <div class="col-md-4">
              <label class="font-weight-bold" for="">Sleect Unite</label>
              <select class="form-control" name="unite_id">
                @foreach($unite as $v_unt)
                <option value="{{$v_unt->id}}">{{$v_unt->unite_name}}</option>
                @endforeach
              </select>
            </div>
          </div>
        </div>
      </div><!--end of releted info of product -->


<br>
      <div class="row justify-content-center">
        <div class="col-md-10">
          <h4 class="text-info bg-light">Product Info</h4>
          <div class="row">
            <div class="col-md-3">
              <label for="" class="font-weight-bold">Product Title</label>
              <input class="form-control" type="text" name="product_name" placeholder="Type here..." value="">
            </div>


            <div class="col-md-3">
              <label for="" class="font-weight-bold">Product Stock</label>
              <input class="form-control" type="number" name="total_stock" placeholder="Type here..." value="">
            </div>

            <div class="col-md-3">
              <label for="" class="font-weight-bold">Product Price</label>
              <input class="form-control" type="number" name="Product_price" placeholder="Type here..." value="">
            </div>


            <div class="col-md-3">
              <label for="" class="font-weight-bold">Product Image</label>
              <input class="form-control" type="file" name="product_image" value="">
            </div>

            <input type="hidden" name="product_status" value="0">
            <input type="hidden" name="sell_quantity" value="0">
          </div>


          <div class="float-right mt-3">
            <a class="btn btn-danger" href="{{route('manager.product.add')}}"><i class="fad fa-repeat-alt"></i>Reset</a>
            <button class="btn btn-info" type="submit" name="button"><span class="mr-1"><i class="fas fa-plus-square"></i></span> Add Product</button>
          </div>
        </div>

        </form>

      </div>




    </section>

@endsection
