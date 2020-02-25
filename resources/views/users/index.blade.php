@extends('layouts.app')

@section('content')
<link href="{{asset('plugins')}}/datatables/media/css/dataTables.bootstrap.css" rel="stylesheet">
<link href="{{asset('plugins')}}/datatables/extensions/Responsive/css/responsive.dataTables.min.css" rel="stylesheet">
<style>
   
    .sensor_name{
        background: red;
        color: #fff;
        padding: 7px 5px;
        border-radius: 50%;
        font-size: 10px;
    }
</style>
<div id="page-head">
    <div class="pad-all text-center">
        <h3>Welcome back to your miiCARE Dashboard</h3>
        <p1>scroll down to see quick links and overview of the health condition of your loved one.<p></p>
        </p1>
    </div>
</div>
<div id="page-content">
    
  
    <div class="row" id="Notification">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-xs-12 col-lg-12">
                    <div class="panel">
                        <div class="panel-heading" style="height:42px">
                            <h3 class="panel-title">Notification</h3>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="demo-dt-basic" class="table table-vcenter mar-top">
                                    <thead>
                                        <tr>
                                            <th class="min-w-td">#</th>
                                            <th class="min-w-td">Profile</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>UCRN</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbody">
                                        @foreach($users as $key=>$user)
                                        <tr>
                                            <td>{{$key+1}}</td> 
                                            <td><img width="80" height="80" src="{{asset("uploads")."/".$user->profile_picture}}"></td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->username}}</td>
                                            <td>
                                                <a href="{{route("details",$user->id)}}" class="btn btn-info"> <i class="fa fa-eye"></i> View</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
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
<script src="{{asset("plugins")}}/datatables/media/js/jquery.dataTables.js"></script>
<script src="{{asset("plugins")}}/datatables/media/js/dataTables.bootstrap.js"></script>
<script src="{{asset("plugins")}}/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></
<script src="{{asset("js")}}/demo/tables-datatables.js"></script>
<script>
    table=$('#demo-dt-basic').dataTable( {
        "responsive": true,
        "language": {
            "paginate": {
              "previous": '<i class="demo-psi-arrow-left"></i>',
              "next": '<i class="demo-psi-arrow-right"></i>'
            }
        }
    } );
</script>
@endsection