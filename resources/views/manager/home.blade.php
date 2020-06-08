@extends('manager_dashbord')
@section('manager_content')

<div class="row container d-flex">
<!-- ----------------------------------------------------------------------------- -->
      <div class="col-md-3 "><!-- start of -->
            <div class="card w-card text-light" style="background:#1FA7D7;">
              <?php $today_sell=0; ?>
              @foreach($today as $v_order)
                <?php
                    $today_sell +=$v_order->total_ammount;
                 ?>
              @endforeach
            <span class="text-center pt-4 font-weight-bold">Today Sell:{{$today_sell}}Taka</span>
            </div>
      </div><!-- end of -->
<!-- ----------------------------------------------------------------------------- -->

<!-- ----------------------------------------------------------------------------- -->
      <div class="col-md-3 "><!-- start of -->
        <div class="card w-card text-light" style="background:#5B2C6F;">
          <?php $yesterday_sell=0; ?>
          @foreach($yesterday as $v_yesterday)
            <?php
                $yesterday_sell +=$v_yesterday->total_ammount;
             ?>
          @endforeach
        <span class="text-center pt-4 font-weight-bold">Yesterday Sell:{{$yesterday_sell}}Taka</span>
        </div>
      </div><!-- end of -->
<!-- ----------------------------------------------------------------------------- -->

<!-- ----------------------------------------------------------------------------- -->
      <div class="col-md-3 "><!-- start of -->
        <div class="card w-card text-light" style="background-color: #34495E; ">
          <?php $month=0; ?>
          @foreach($month_order as $v_month)
            <?php
                $month +=$v_month->total_ammount;
             ?>
          @endforeach
        <span class="text-center pt-4 font-weight-bold">Month Sell:{{$month}}Taka</span>
        </div>
      </div><!-- end of -->
<!-- ----------------------------------------------------------------------------- -->

<!-- ----------------------------------------------------------------------------- -->
      <div class="col-md-3 "><!-- start of -->
            <div class="card w-card text-light" style="background:#F86C6B;">
              <?php $month=0; ?>
              @foreach($month_order as $v_month)
                <?php
                    $month +=$v_month->total_ammount;
                 ?>
              @endforeach
            <span class="text-center pt-4 font-weight-bold">Month Sell:{{$month}}Taka</span>
            </div>
      </div><!-- end of -->
<!-- ----------------------------------------------------------------------------- -->

</div><!-- end of righ side row -->
<br>

<!-- -----------------------------------end of first show ---------------------------------------------------->
<div class="row">
  <div class="col-md-3"><!-- secound left  show start -->
    <!-- ----------------------------------------------------------------------------- -->
            <div class="col-md-3 "><!-- start of -->
                  <div class="card w-card text-light" style="background:#3B5999;">
                    <span class="text-center pt-4 font-weight-bold">Employee:{{$employee}}</span>
                  </div>
            </div><!-- end of --><br>
    <!-- ----------------------------------------------------------------------------- -->
    <!-- ----------------------------------------------------------------------------- -->
            <div class="col-md-3 "><!-- start of -->
                  <div class="card w-card text-light" style="background:#884EA0;">
                    <span class="text-center pt-4 font-weight-bold">Customer:{{$customer}}</span>
                  </div>
            </div><!-- end of --><br>
    <!-- ----------------------------------------------------------------------------- -->

    <!-- ----------------------------------------------------------------------------- -->
            <div class="col-md-3 "><!-- start of -->
                  <div class="card w-card text-light" style="background:#4876B4;">
                    <span class="text-center pt-4 font-weight-bold">Unite:{{$unite}}</span>
                  </div>
            </div><!-- end of --><br>
    <!-- ----------------------------------------------------------------------------- -->


    <!-- ----------------------------------------------------------------------------- -->
            <div class="col-md-3 "><!-- start of -->
                  <div class="card w-card text-light" style="background:#FF5733;">
                    <span class="text-center pt-4 font-weight-bold">Product:{{$product}}</span>
                  </div>
            </div><!-- end of --><br>
    <!-- ----------------------------------------------------------------------------- -->

  </div><!-- secound left value show end -->
<!-- -------------------------------------------------seocund row atart---------------------------------->
  <div class="col-md-9"><!-- secound right side start -->
    <div class="row">
      <div class="col-md-5">
        <div id="piechart" style="width: 400px; height: 300px;"></div>
      </div><!-- end of circle chart --->



      <div class="col-md-7 pr-5">

          <div class="progress">
          <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 43%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
        </div><br>
          <div class="progress">
            <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div><br>
          <div class="progress">
            <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
          </div><br>
          <div class="progress">
            <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
          </div><br>
          <div class="progress">
            <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div><br>
          </div>
      </div><!-- end of circle chart --->

    </div>
@endsection
