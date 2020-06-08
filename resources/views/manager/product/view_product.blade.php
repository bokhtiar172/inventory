@extends('manager_dashbord')
@section('manager_content')
<br><br>
<section>
  <div class="row justify-content-center">
    <div class="col-md-12">

<a class="btn btn-info float-right" href="{{route('manager.product.add')}}"><i class="fas fa-plus-square"></i> Add Product</a>

      <table class="table table-striped">
  <thead style="background-color: #5D6D7E; color: white;">
    <tr>
      <th scope="col">Sl</th>
      <th scope="col"> Titel</th>
      <th scope="col">Category</th>
      <th scope="col">Supplier</th>
      <th scope="col">Total Stock</th>
      <th scope="col"> unite</th>
      <th scope="col">Price</th>
      <th scope="col">Total Sell</th>
      <th scope="col"> Stock</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($all_product as $v_product)
    <tr>
      <td>{{$loop->index +1}}</td>
      <td>{{$v_product->product_name}}</td>
      <td>{{$v_product->category->category_name}}</td>
      <td>{{$v_product->supplier->supplier_name}}</td>
      <td>{{$v_product->total_stock}}</td>
      <td>{{$v_product->unite->unite_name}}</td>
      <td>{{$v_product->product_price}}TK</td>
      <td>{{$v_product->sell_quantity}}</td>
      <td>{{$v_product->total_stock-$v_product->sell_quantity}}</td>
      <td><img height="50px" width="50px;" src="{{asset($v_product->product_image)}}" alt=""> </td>
        <td>
            @if($v_product->product_status==1)
                  <a href="{{URL::to('manager/product/unactive/'.$v_product->id)}}"><span class="text-success h5"><i class="fas fa-hand-point-up"></i></span></a>
            @else
                  <a href="{{URL::to('manager/product/active/'.$v_product->id)}}"><span class="text-warning h5"><i class="fas fa-hand-point-down"></i></span></a>
            @endif
            <a class="text-info h5" href="{{URL::to('manager/product/edite/'.$v_product->id)}}"><i class="fas fa-edit"></i></a>
            <a class="text-danger h5" href="{{URL::to('manager/product/delete/'.$v_product->id)}}"><i class="fas fa-trash-alt"></i></a>
        </td>

    </tr>
    @endforeach
  </tbody>
</table>
    </div>
  </div>
</section>
@endsection
