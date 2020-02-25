@extends('layouts.app')

@section('content')
<div id="page-head">
</div>
<!--Fixedbar-->
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<!--End Fixedbar-->
<!--Page content-->
<!--===================================================-->
<div id="page-content">
    <div class="panel">
        <div class="panel-body">
            <div class="fixed-fluid">
                <div class="fixed-md-200 pull-sm-left fixed-right-border">
                    <!-- Simple profile -->
                    <div class="text-center">
                        <div class="pad-ver">
                            <img src="{{asset("uploads")."/".Auth::user()->profile_picture}}" class="img-lg img-circle" alt="Profile Picture">
                        </div>
                        <h4 class="text-lg text-overflow mar-no">{{Auth::user()->name}}</h4>
                        <p class="text-sm text-muted">{{Auth::user()->email}}</p>
                    </div>
                </div>
                <div class="fluid">
                    <hr class="new-section-md bord-no">
                    <div class="pad-btm">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">User Profile</h3>
                            </div>
                            <br><br>
                            <!--Horizontal Form-->
                            <!--===================================================-->
                            <form enctype="multipart/form-data" role="form"  method="POST" action="{{ route('profile_picture_update') }}">
                                {{ csrf_field() }}
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="control-label">Profile</label>
                                                <input name="profile" required  id="profile_image" type="file" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <img style="height: 100px;width: 100px;" id="image-user-preview" src="{{asset("uploads")."/".Auth::user()->profile_picture}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer text-right">
                                    <button class="btn btn-success" type="submit">Submit</button>
                                </div>
                            </form>
                            <hr>
                            <!--===================================================-->
                            <!--End Horizontal Form-->
                        </div>   
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">User Details Update</h3>
                            </div>
                            <br><br>
                            <!--Horizontal Form-->
                            <!--===================================================-->
                            <form role="form"  method="POST" action="{{ route('profile_update') }}">
                                {{ csrf_field() }}
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                                <label class="control-label">Name</label>
                                                <input name="name" required value="{{ old('name',Auth::user()->name) }}" id="name" type="text" class="form-control">
                                                @if ($errors->has('name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                                                <label class="control-label">Username</label>
                                                <input type="text" required value="{{ old('username',Auth::user()->username) }}"  name="username" id="username" class="form-control">
                                                @if ($errors->has('username'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('username') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer text-right">
                                    <button class="btn btn-success" type="submit">Submit</button>
                                </div>
                            </form>
                            <hr>
                            <!--===================================================-->
                            <!--End Horizontal Form-->
                        </div>   
                        <div class="panel">
                            @if (Session::has('error_message'))
                            <div class="row">
                                <div class="col-sm-10 col-sm-offset-1 help-block alert alert-danger">
                                    <strong class="">{{session('error_message')}}</strong>
                                </div>
                                <br>
                            </div>
                            @endif
                            <div class="panel-heading">
                                <h3 class="panel-title">Change Password</h3>
                            </div>
                            <br><br>
                            
                            <!--Horizontal Form-->
                            <!--===================================================-->
                            <form role="form"  method="POST" action="{{ route('change_password') }}">
                                {{ csrf_field() }}
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                <label class="control-label">Current Password</label>
                                                <input name="password" required  id="password" type="password" class="form-control">
                                                @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group{{ $errors->has('new_password') ? ' has-error' : '' }}">
                                                <label class="control-label">New Password</label>
                                                <input type="password" required  name="new_password" id="new_password" class="form-control">
                                                @if ($errors->has('new_password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('new_password') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group{{ $errors->has('confirm_password') ? ' has-error' : '' }}">
                                                <label class="control-label">Confirm Password</label>
                                                <input type="password" required  name="confirm_password" id="confirm_password" class="form-control">
                                                @if ($errors->has('confirm_password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('confirm_password') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer text-right">
                                    <button class="btn btn-success" type="submit">Submit</button>
                                </div>
                            </form>
                            <hr>
                            <!--===================================================-->
                            <!--End Horizontal Form-->
                        </div>   
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>         
@include('layouts.sidemenu')
</div>
@endsection

@section('js')
<script>
    function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function(e) {
        $('#image-user-preview').attr('src', e.target.result);
      }

      reader.readAsDataURL(input.files[0]);
    }
  }
  $("#profile_image").change(function() {
        console.log("s");
        readURL(this);
  });
</script>
@endsection