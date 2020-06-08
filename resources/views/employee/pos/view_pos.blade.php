@extends('employee_dashbord')
@section('employee_content')


    <section>

          <div class="row">
            <div class="col-md-5"><!-- left side area of order deataisl start --><br>
              <h4 class="text-success">Selected Item's</h4>
              <table class="table">
                    <thead>
                      <tr>
                        <th scope="col"> Name</th>
                        <th scope="col"> Image</th>
                        <th scope="col">Quantity</th>
                        <th scope="col"> Price</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $total_price=0; $total_product=0;?>
                    @foreach(App\cart::total_cart_item() as $v_cart_item)
                      <tr>
                        <td>{{$v_cart_item->product->product_name}}</td>
                        <td><img height="40px;" width="40px;" src="{{asset($v_cart_item->product->product_image)}}" alt=""> </td>
                        <td>
                          <form class="form-inline" action="{{url('employee/pos/cart-update/'.$v_cart_item->id)}}" method="post">
                            @csrf
                            <input style="width: 60px;" class="form-control " type="number" name="quantity" value="{{$v_cart_item->quantity}}">
                            <button type="submit" name="button"><i class="fas fa-pen-square"></i>da</button>
                          </form>
                        </td>
                        <td>{{$v_cart_item->product->product_price*$v_cart_item->quantity}}Tk</td>
                        <?php

                          $total_price +=$v_cart_item->product->product_price*$v_cart_item->quantity;
                          $total_product +=$v_cart_item->quantity;
                         ?>
                      <td> <a href="{{url('employee/pos/card-delete/'.$v_cart_item->id)}}"><i class="fas fa-trash-alt"></i>de</a></td>

                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                  <div class="text-center">
                    <h4 class="text-info">Total Product:{{$total_product}}</h4>
                    <h4 class="text-info">Total Price:{{$total_price}}</h4>
                  </div>



                  <section><!-- order area start-->
                    <div class="">
                      <form class="" action="{{route('employee.order.store')}}" method="post">
                        @csrf
                        <div class="">
                          <label for="">Slect customer</label>
                          <select class="form-control" name="customer_id">
                            <option value="">Select Customer</option>
                            @foreach(App\customer::latest()->get() as $v_customer)
                            <option value="{{$v_customer->id}}">{{$v_customer->customer_name}}</option>
                            @endforeach
                          </select>
                        </div><!-- end of custoemr area -->





                        <div class="">
                          <label for="">Slect payment</label>
                          <select class="form-control" name="payment_id">
                            <option value="">Select Customer</option>
                            @foreach(App\payment::latest()->get() as $v_payment)
                            <option value="{{$v_payment->id}}">{{$v_payment->payment_name}}</option>
                            @endforeach
                          </select>
                        </div><!-- end of payment area -->

                        <div class="">
                          <label for="">Enter Total Ammount </label>
                          <input class="" type="number" name="total_ammount" value="">
                        </div>

                        <div class="">
                          <label for="">Enter Due Ammount </label>
                          <input class="form-control" type="number" name="due" value="">
                        </div>

                        <div class="">
                          <label for="">Enter Phone number </label>
                          <input class="form-control" type="number" name="phone" value="">
                        </div>


                        <div class="">
                          <label for="">Enter Phone specialcode </label>
                          <input class="form-control" type="text" name="special_code" value="">
                        </div>

                        <input class="btn btn-info" class="float-right" type="submit" name="order_btn" value="Create Invoice">

                      </form>
                    </div>
                  </section><!-- order area start-->








            </div><!-- left side area of order deataisl end -->
<!-- -------------------------------------------------------------------------------------------------- -->
            <div class="col-md-7"><!-- left side area of order deataisl start -->
              <br>
              <h4 class="text-success">Category</h4>
              <table class="table">
                    <thead>
                      <tr>
                        <th scope="col"> Name</th>
                        <th scope="col"> Image</th>
                        <th scope="col"> Stock</th>
                        <th scope="col"> Price</th>
                        <th scope="col"> Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($all_product as $v_product)
                      <tr>
                        <td>{{$v_product->product_name}}</td>
                        <td><img height="60px" width="60px;" src="{{asset($v_product->product_image)}}" alt=""> </td>
                        <td>{{$v_product->total_stock-$v_product->sell_quantity}}</td>
                        <td>{{$v_product->product_price}}<strong>Tk</strong> </td>
                        <td>
                          <form class="" action="{{url('employee/pos/cart-store/'.$v_product->id)}}" method="post">
                            @csrf
                            <input type="hidden" name="quantity" value="1">
                            <button type="submit" name="button"><i class="fas fa-shopping-cart"></i></button>

                          </form>


                              @if($v_product->product_status==1)
                                    <a href="{{URL::to('manager/product/unactive/'.$v_product->id)}}"><span class="text-success h5"><i class="fas fa-hand-point-up"></i></span></a>
                              @else
                                    <a href="{{URL::to('manager/product/active/'.$v_product->id)}}"><span class="text-warning h5"><i class="fas fa-hand-point-down"></i></span></a>
                              @endif


                        </td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
            </div><!-- left side area of order deataisl end -->
          </div>

    </section>


@endsection
