<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Inventory || Shop</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"><!-- bootsrtrap cdn link -->
    <script src="https://kit.fontawesome.com/ba78558982.js" crossorigin="anonymous"></script><!-- icon link -->
    <link rel="stylesheet" href="{{asset('employee/style.css')}}">
  </head>


  <body>
    <section>
        <div class="row">

          <div class="col-md-2 text-center  w-height text-light"><!--start of right side -->
      <!-- ---------------------------------------------------------------------------------------------- -->

            <div class="mt-2">
              <span class="ml-1"><i class="fas fa-tachometer-fastest"></i></span>
              <a class="text-light w-text" href="#">Dashbord</a>
            </div>

      <!-- ---------------------------------------------------------------------------------------------- -->

            <strong class="mt-3 float-left"><span class="ml-1"><i class="fas fa-mask"></i></span>  Manue</strong><br><br>
      <!-- ---------------------------------------------------------------------------------------------- -->
      <div class="dropdown"><!-- start of -->
            <a class=" dropdown-toggle " href="#"  id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="text-light">pos</span>
            </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="{{route('employee.pos.view')}}">Pos</a>
                </div>
      </div><br><!-- end of
      <!-- --------------------------------------------------------------------------------------------------- -->



      <!-- ---------------------------------------------------------------------------------------------- -->
      <div class="dropdown"><!-- start of -->
            <a class=" dropdown-toggle " href="#"  id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="text-light">Manage Customer</span>
            </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="{{route('employee.customer.view')}}">View Customer</a>
                </div>
      </div><br><!-- end of
      <!-- ---------------------------------------------------------------------------------------------- -->
      <div class="dropdown"><!-- start of -->
            <a class=" dropdown-toggle " href="#"  id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="text-light">Manage Category</span>
            </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="{{route('employee.category.view')}}">View Category</a>
                </div>
      </div><br><!-- end of
      <!-- --------------------------------------------------------------------------------------------------- -->
      <!-- ---------------------------------------------------------------------------------------------- -->
      <div class="dropdown"><!-- start of -->
            <a class=" dropdown-toggle " href="#"  id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="text-light">Manage Unite </span>
            </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="{{route('employee.unite.view')}}">View Unite</a>
                </div>
      </div><br><!-- end of
      <!-- --------------------------------------------------------------------------------------------------- -->
      <!-- ---------------------------------------------------------------------------------------------- -->
      <div class="dropdown"><!-- start of -->
            <a class=" dropdown-toggle " href="#"  id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="text-light">Manage Supplier</span>
            </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="{{route('employee.supplier.view')}}">View Supplier</a>
                </div>
      </div><br><!-- end of
      <!-- --------------------------------------------------------------------------------------------------- -->
      <!-- ---------------------------------------------------------------------------------------------- -->
      <div class="dropdown"><!-- start of -->
            <a class=" dropdown-toggle " href="#"  id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="text-light">Manage Product</span>
            </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="{{route('employee.product.view')}}">View Product</a>
                </div>
      </div><br><!-- end of
      <!-- --------------------------------------------------------------------------------------------------- -->


          <strong class=" float-left"><span class="ml-1"><i class="fas fa-cog"></i></span>  Setting's</strong><br>
      <!-- ---------------------------------------------------------------------------------------------- -->
            <div class="mt-3 w-text">
              <a class="text-light w-text" href="#">Update Info</a>
            </div>

      <!-- ---------------------------------------------------------------------------------------------- -->
      <!-- ---------------------------------------------------------------------------------------------- -->
            <div class="mt-3 w-text">
              <a class="text-light w-text" href="#">Reset Password</a>
            </div>

      <!-- ---------------------------------------------------------------------------------------------- -->
      <!-- ---------------------------------------------------------------------------------------------- -->
            <div class="mt-3 w-text">
              <a class="text-light w-text" href="#">Logout</a>
            </div>

      <!-- ---------------------------------------------------------------------------------------------- -->

        </div><!--end of left side -->

        <div class="col-md-10"><!-- righr side start -->
          <!-- navbar start -->
          <nav class="navbar navbar-light navbar-expand bg-light">
            <form class="form-inline">
              <input style="border-radius: 20px;  " class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" >

              <button class="w-btn  my-2 my-sm-0" type="submit"><i class=" fas fa-bell"></i></button>
            </form>

            <ul class="navbar-nav ml-auto">

              <li class="nav-item">
                <a class="nav-link text-dark" href="#"><i class="fas fa-shopping-cart"></i><strong class="text-primary" >{{App\cart::total_cart_number()}}</strong>  </a>
              </li>
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
          @yield('employee_content')
        </div><!-- right side end -->

      </div><!-- end of row div-->


    </section>
<!-- bootstrap java script area -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
