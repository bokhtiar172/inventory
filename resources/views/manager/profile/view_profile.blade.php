@extends('manager_dashbord')
@section('manager_content')

<br><br>
<div class="row">
  <div class="col-md-3 ">

  </div>


  <div class="col-md-6 bg-light">
    <h4 class="text-center text-info">Manager Info</h4>
    <span><strong class="h6">Manager Name:</strong><span class="ml-2">{{Auth::user()->name}}</span>  </span><br>
    <span><strong class="h6">Manager Email:</strong><span class="ml-2">{{Auth::user()->email}}</span>  </span><br>
    <span><strong class="h6">Manager Phone:</strong><span class="ml-2">{{Auth::user()->phone}} </span> </span><br>
    <span><strong class="h6">Manager Location:</strong><span class="ml-2">{{Auth::user()->location}}</span>  </span><br>

    <div class="float-right">
      <a href="{{route('manager.profile.view')}}">Edite</a>
      <a href="{{route('manager.profile.view')}}">Password Change</a>
    </div>
  </div><!--end of profile -->

  <div class="col-md-3">

  </div>
</div>

<br><br>
<div class="row">
  <div class="col-md-6 bg-light">
    <h4 class="text-center text-info">Edite Profile</h4>
    <form class="" action="{{url('manager/profile/update/'.Auth::id())}}" method="post">
      @csrf
      <div class="form-group">
        <label class="font-weight-bold" for="">Change the your Name</label>
        <input class="form-control" type="text" name="name" value="{{Auth::user()->name}}">
      </div>


      <div class="form-group">
        <label class="font-weight-bold" for="">Change the your Email</label>
        <input class="form-control" type="text" name="email" value="{{Auth::user()->email}}">
      </div>


      <div class="form-group">
        <label class="font-weight-bold" for="">Change the your Phone</label>
        <input class="form-control" type="text" name="phone" value="{{Auth::user()->phone}}">
      </div>


      <div class="form-group">
        <label class="font-weight-bold" for="">Change the your Location</label>
        <textarea class="form-control" name="location" rows="8" cols="80">{{Auth::user()->location}}</textarea>
      </div>

      <div class="form-group">
        <input class="btn btn-info float-right" type="submit" name="update_btn" value="Update Info">
      </div>
    </form>
  </div><!-- edite info for admin area end -->

  <div class="col-md-6">
    <h4 class="text-center text-info">Change Password</h4>
    <form method="POST" action="{{ route('manager.profile.change_password') }}">
        @csrf


        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="old_password" required autocomplete="new-password">

            </div>
        </div>



        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('New Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            </div>
        </div>


        <div class="form-group row">
            <label for="confirm_password" class="col-md-4 col-form-label text-md-right">{{ __('confirm Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password">

            </div>
        </div>









        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Reset Password') }}
                </button>
            </div>
        </div>
    </form>
  </div><!-- end of Password change area --->
</div>
@endsection
