<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head><!-- start of head -->
        <meta charset="utf-8">
        <title>Pos || sell</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css"><!-- bootsrtrap cdn link -->
        <script src="https://kit.fontawesome.com/ba78558982.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <!--round chart -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script><!-- vartical -->
        <link rel="stylesheet" href="{{asset('manager/style.css')}}">

  </head><!--end of head -->

<!-- start o body part -->
  <body>
    <section>
      <div class="row">

        <div class="col-md-2 text-center  w-height text-light"><!--start of right side -->
    <!-- ---------------------------------------------------------------------------------------------- -->

          <div class="mt-2">
            <span class="ml-1"><i class="fas fa-tachometer-fastest"></i></span>
            <a class="text-light w-text" href="#"><span class="mr-1"><i class="fab fa-dashcube"></i></span><strong>Manager Dashbord</strong> </a>
          </div><br>



          <div class="">
            <span class="mr-1"><i class="fas fa-user-circle"></i></span> <strong>Bokhtiar toshar</strong>
          </div>
          <hr>





    <!-- ---------------------------------------------------------------------------------------------- -->

          <strong class="mt-1 float-left"><span class="ml-1"><i class="fas fa-mask"></i></span>  Manue</strong><br><br>

    <!-- ---------------------------------------------------------------------------------------------- -->
    <div class="dropdown"><!-- start of -->
          <a class=" dropdown-toggle " href="#"  id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="text-light">Manage Profile</span>
          </a>

              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="{{route('manager.profile.view')}}">View Profile</a>
              </div>
    </div><br><!-- end of
      <!-- ---------------------------------------------------------------------------------------------- -->
      <div class="dropdown"><!-- start of -->
            <a class=" dropdown-toggle " href="#"  id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="text-light">Manage Employee</span>
            </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="{{route('manager.employee.view')}}">View Supplier</a>
                </div>
      </div><br><!-- end of
      <!-- --------------------------------------------------------------------------------------------------- -->
      <!-- ---------------------------------------------------------------------------------------------- -->
      <div class="dropdown"><!-- start of -->
            <a class=" dropdown-toggle " href="#"  id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="text-light">Manage Report</span>
            </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="{{route('manager.report.today')}}">Today Report</a>
                <a class="dropdown-item" href="{{route('manager.report.yesterday')}}">Yesterday</a>
                <a class="dropdown-item" href="{{route('manager.report.week')}}">Week</a>
                <a class="dropdown-item" href="{{route('manager.report.month')}}">Month</a>
                </div>
      </div><br><!-- end of
      <!-- --------------------------------------------------------------------------------------------------- -->
    <!-- ---------------------------------------------------------------------------------------------- -->
    <div class="dropdown"><!-- start of -->
          <a class=" dropdown-toggle " href="#"  id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="text-light">Manage Supplier</span>
          </a>

              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="{{route('manager.supplier.view')}}">View Supplier</a>
              </div>
    </div><br><!-- end of
    <!-- --------------------------------------------------------------------------------------------------- -->
    <!-- ---------------------------------------------------------------------------------------------- -->
    <div class="dropdown"><!-- start of -->
          <a class=" dropdown-toggle " href="#"  id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="text-light">Manage Customer</span>
          </a>

              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="{{route('manager.customer.view')}}">View Customer</a>
              </div>
    </div><br><!-- end of
    <!-- --------------------------------------------------------------------------------------------------- -->
    <!-- ---------------------------------------------------------------------------------------------- -->
    <div class="dropdown"><!-- start of -->
          <a class=" dropdown-toggle " href="#"  id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="text-light">Manage Unite</span>
          </a>

              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="{{route('manager.unite.view')}}">View Unite</a>
              </div>
    </div><br><!-- end of
    <!-- --------------------------------------------------------------------------------------------------- -->
    <!-- ---------------------------------------------------------------------------------------------- -->
    <div class="dropdown"><!-- start of -->
          <a class=" dropdown-toggle " href="#"  id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="text-light">Manage Category</span>
          </a>

              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="{{route('manager.category.view')}}">View Category</a>
              </div>
    </div><br><!-- end of
    <!-- --------------------------------------------------------------------------------------------------- -->


    <!-- ---------------------------------------------------------------------------------------------- -->
    <div class="dropdown"><!-- start of -->
          <a class=" dropdown-toggle " href="#"  id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="text-light">Manage Product's</span>
          </a>

              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="{{route('manager.product.view')}}">View Product's</a>
              </div>
    </div><br><!-- end of
    <!-- --------------------------------------------------------------------------------------------------- -->



      </div><!--end of left side -->

<!-- -----------------------------------------------end of left side --------------------------------------- -->

<!-- -----------------------------------------------start of right side --------------------------------------- -->




        <div class="col-md-10   mt-2"><!-- start of right side -->
          <!-- navbar start -->
          <nav class="navbar navbar-light navbar-expand bg-light">
            <form class="form-inline">
              <input style="border-radius: 20px;  " class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" >

              <button class="w-btn  my-2 my-sm-0" type="submit"><i class=" fas fa-bell"></i></button>
            </form>

            <ul class="navbar-nav ml-auto">


              <li class="nav-item ">
                <a class="nav-link text-dark" href="#"><i class="fas fa-envelope-square"></i></a>
              </li>

              <li class="nav-item ">
                <a class="nav-link text-dark" href="#"><i class=" fas fa-bell"></i></a>
              </li>

            <li class="nav-item ">
              <a class="nav-link text-dark" href="#">Bokhtiar</a>
            </li>
            </ul>
          </nav>
          <!-- navbar end -->


@yield('manager_content')


            </div><!-- secound right side end -->






      </div><!--end of row div-->
    </section><!--main section end -->

<!--start of javascript area -->
    <!-- bootstrap javascript area -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- bootstrap javascript area -->

    <!-- round chart start -->
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['today',     898],
          ['Yyesterday',      490],
          ['week',  390],
          ['Month',    675]
        ]);

        var options = {
          title: 'Product Sell Report'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
    <!-- round chart end -->

    <!-- vartical progress bar start -->
    <script type="text/javascript">
    $(function(){
      $('.bars li .bar').each(function(key, bar){
        var percentage = $(this).data('percentage');
        $(this).animate({
          'height' : percentage + '%'
        },1000);
      });
    });
    </script>
    <!-- vartical progress bar end -->
    <!--start notification start -->
    <script>
    @if(Session::has('message'))
      var type="{{Session::get('alert-type','info')}}"

      switch(type){
        case 'info':
               toastr.info("{{ Session::get('message') }}");
               break;
            case 'success':
                toastr.success("{{ Session::get('message') }}");
                break;
            case 'warning':
                toastr.warning("{{ Session::get('message') }}");
                break;
            case 'error':
              toastr.error("{{ Session::get('message') }}");
              break;
      }
    @endif
    </script>
    <!-- end of notification -->
<!--start of javascript area -->
  </body>
<!-- end of body part -->
</html>
