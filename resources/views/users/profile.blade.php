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
                            <img src="{{asset("uploads")."/".$user->profile_picture}}" class="img-lg img-circle" alt="Profile Picture">
                        </div>
                        <h4 class="text-lg text-overflow mar-no">{{$user->name}}</h4>
                        <p class="text-sm text-muted">UCRN : {{$user->username}}</p>
                        <p class="text-sm text-muted">{{$user->email}}</p>
                    </div>
                </div>
                <div class="fluid">
                    <hr class="new-section-md bord-no">
                    <div class="pad-btm">
                        <div class="panel">
                            
                            <div class="row">
                                @if (Session::has('success_message'))
                                <div class="alert alert-success">
                                    <span>{{session('success_message')}}</span>
                                </div>
                                @elseif (Session::has('error_message'))
                                <div class="alert alert-danger">
                                    <span>{{session('error_message')}}</span>
                                </div>
                                @endif
                            </div>
                            <div class="panel-heading">
                                <h3 class="panel-title">User Sensor</h3>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-sm-12">
                                    <form class="form-horizontal" role="form"  method="POST" action="{{ route('user_sensor_update',$user->id) }}">
                                         {{ csrf_field() }}
                                        <div class="panel-body">
                                            @foreach($sensors as $key=>$sensor)
                                            <div class="row">
                                                <div class="col-md-1 mar-btm">
                                                    @if($key==0)
                                                    <label class="control-label">No</label>
                                                    @endif
                                                    <input type="text" class="form-control" readonly value="{{$key+1}}">
                                                </div>
                                                <div class="col-md-3 mar-btm">
                                                    @if($key==0)
                                                    <label class="control-label">Sensor Name</label>
                                                    @endif
                                                    <input type="text" class="form-control" readonly value="{{$sensor->name}}">
                                                </div>
                                                <div class="col-md-3 mar-btm">
                                                    @if($key==0)
                                                    <label class="control-label">Category</label>
                                                    @endif
                                                    <input type="text" class="form-control" readonly value="{{$sensor->category}}">
                                                </div>
                                                <div class="col-md-2 mar-btm">
                                                    @if($key==0)
                                                    <label class="control-label">Type</label>
                                                    @endif
                                                    <input type="text" name="form[{{$key}}][type]" class="form-control" readonly value="{{$sensor->type}}">
                                                </div>
                                                <div class="col-md-3 mar-btm">
                                                    @if($key==0)
                                                    <label class="control-label">ID (Sensor-214654)</label>
                                                    @endif
                                                    <input type="hidden" name="form[{{$key}}][sensor_id]" class="form-control" placeholder="Sensor ID" value="{{$sensor->id}}">
                                                    <input type="hidden" name="form[{{$key}}][ucm_id]" class="form-control" placeholder="Sensor ID" value="{{$sensor->usm_id}}">
                                                    <input type="text" name="form[{{$key}}][sensor_name]" class="form-control" placeholder="Sensor ID" value="{{$sensor->sensor_name}}">
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                        <div class="panel-footer text-right">
                                            <button class="btn btn-warning">Update Senssor</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
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