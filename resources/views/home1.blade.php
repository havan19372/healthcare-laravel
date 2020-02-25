@extends('layouts.app')

@section('content')
<link href="{{asset('plugins')}}/datatables/media/css/dataTables.bootstrap.css" rel="stylesheet">
<link href="{{asset('plugins')}}/datatables/extensions/Responsive/css/responsive.dataTables.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{asset('plugins')}}/bootstrap-daterangepicker/daterangepicker.css">
<style>
    #demo-dt-basic_wrapper .row:first-child {
        display: none;
    }
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
    <div class="row">
        <div class="col-lg-7">
            <div id="demo-panel-network" class="panel">
                <div class="col-xs-6">
                    <div class="panel-heading">
                        <h3 class="panel-title">Whereabout</h3>
                    </div>
                </div>
                <div class="legend" style="position: relative;">
                    <div style="position: absolute; width: 100.667px; height: 34px; top: 8px; left: 8px; background-color: rgb(255, 255, 255); opacity: 0.85;"> </div>
                    <table style="position:absolute;top:33px;left:30px;;font-size:smaller;color:#545454"><tbody>
                            <tr><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(254,95,152);overflow:hidden;display: inline-block;"></div></div></td><td class="legendLabel">Door Opened</td></tr>
                            <tr><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(0,176,240);overflow:hidden;display: inline-block;"></div></div></td><td class="legendLabel">Door closed</td></tr></tbody></table></div>
                <div class="col-xs-6 table-toolbar-right">
                    <div class="panel-control">
                        <button id="demo-panel-network-refresh" class="btn btn-default btn-active-primary" data-toggle="panel-overlay" data-target="#demo-panel-network"><i class="demo-psi-repeat-2"></i></button>
                        <div class="dropdown">
                            <button class="dropdown-toggle btn btn-default btn-active-primary" data-toggle="dropdown" aria-expanded="false"><i class="demo-psi-dot-vertical"></i></button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="#" class="time-change" data-value="12">12 Hours</a></li>
                                <li><a href="#" class="time-change" data-value="24">24 Hours</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="pad-all">
                    <script src="js/demo/amcharts.js"></script>
                    <script src="js/demo/serial.js"></script>
                    <script src="js/demo/light.js"></script>
                    <script src="js/demo/gantt.js"></script>
                    <div id="chartdiv">

                    </div>
                    <div class="row">
                        <hr class="ambiant">
                        <div class="col-lg-8">
                            <p class="text-semibold text-uppercase text-main">Ambient Temperature</p>
                            <div class="row">
                                <div class="col-xs-5">
                                    <div class="media">
                                        <div class="media-left">
                                            <span class="text-3x text-thin text-main">43.7</span>
                                        </div>
                                        <div class="media-body">
                                            <p class="mar-no">°C</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-7 text-sm">
                                    <p>
                                        <span>Min Values</span>
                                        <span class="pad-lft text-semibold">
                                            <span class="text-lg">27°</span>
                                            <span class="labellabel-success mar-lft">
                                                <i class="pci-caret-down text-success"></i>
                                                <smal>- 20</smal>
                                            </span>
                                        </span>
                                    </p>
                                    <p>
                                        <span>Max Values</span>
                                        <span class="pad-lft text-semibold" style="padding-left: 11px;">
                                            <span class="text-lg">69°</span>
                                            <span class="labellabel-danger mar-lft">
                                                <i class="pci-caret-up text-danger"></i>
                                                <smal>+ 57</smal>
                                            </span>
                                        </span>
                                    </p>
                                </div>
                            </div>



                            <div class="pad-rgt">
                                <p class="text-uppercase text-main">Living Room</p>

                            </div>
                        </div>

                        <div class="col-lg-4">
                            <p class="text-uppercase text-main" style="color:#f1709c">VISITORS</p>
                            <p>
                                <span style="margin-right:22px";>Carer</span>
                                <span class="pad-lft ">
                                    <span class="morris-legend-items">
                                        <span style="background:#00b050");"></span>8:26 am
                                    </span>
                                </span>
                            </p>
                            <p>
                                <span style="margin-right:8px";>Cleaner</span>
                                <span class="pad-lft ">
                                    <span class="morris-legend-items">
                                        <span style="border: 1px solid rgb(181, 191, 197);"></span>Tues 6th
                                    </span>
                                </span>
                            </p>
                            <p>
                                <span style="margin-right:18px";>Nurse</span>
                                <span class="pad-lft">
                                    <span class="morris-legend-items">
                                        <span style="border: 1px solid rgb(181, 191, 197);"></span>Wed 8th
                                    </span>
                                </span>
                            </p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="col-lg-5">
            <div class="row">
                <div class="col-sm-5 col-lg-5">
                    <div class="panel panel-success panel-colorful">
                        <div class="pad-all">
                            <p class="mar-no">
                                <span class="widget-control1  text-thin">Occupancy</span> </p>
                        </div>
                        <div class="pad-all">
                            <div class="text-semibold text-center text-uppercase text-3x "> out</div>
                            <div class="mar-no text-center">
                                <span class=" text-thin">User left at 17:00:22</span></div>

                        </div>

                    </div>
                </div>

                <div class="col-sm-7 col-lg-7">

                    <div class="panel  panel-warning panel-colorful">
                        <div class="pad-all">
                            <p class="mar-no">
                                <span class="widget-control1  text-thin">Inferred Activity</span> </p>
                        </div>

                        <div id="demo-carousel" class="carousel slide" data-ride="carousel">


                            <ol class="carousel-indicators out">

                            </ol>


                            <div class="carousel-inner text-center">

                                <!--Item 1-->
                                <div class="item">
                                    <div class="col-sm-4 border-right">
                                        <p class="text-lg mar-no activity1">56<span class="percentage">%</span></p>
                                        Medications
                                    </div>
                                    <div class="col-sm-4 border-right">
                                        <p class="text-lg mar-no activity1">45<span class="percentage">%</span></p>
                                        Hydration
                                    </div>
                                    <div class="col-sm-4 border-right">
                                        <p class="text-lg mar-no activity1">45<span class="percentage">%</span></p>
                                        Activity
                                    </div>
                                </div>
                                <!--Item 2-->
                                <div class="item active">
                                    <div class="col-sm-4 border-right">
                                        <p class="text-lg mar-no activity1">56<span class="percentage">%</span></p>
                                        Medications
                                    </div>
                                    <div class="col-sm-4 border-right">
                                        <p class="text-lg mar-no activity1">45<span class="percentage">%</span></p>
                                        Hydration
                                    </div>
                                    <div class="col-sm-4 border-right">
                                        <p class="text-lg mar-no activity1">45<span class="percentage">%</span></p>
                                        Activity
                                    </div>
                                </div>

                                <!--Item 3-->
                                <div class="item">
                                    <div class="col-sm-4 border-right">
                                        <p class="text-lg mar-no activity1">56<span class="percentage">%</span></p>Medications
                                    </div>
                                    <div class="col-sm-4 border-right">
                                        <p class="text-lg mar-no activity1">45<span class="percentage">%</span></p>
                                        Hydration
                                    </div>
                                    <div class="col-sm-4 border-right">
                                        <p class="text-lg mar-no activity1">45<span class="percentage">%</span></p>
                                        Activity
                                    </div>

                                </div>
                            </div>


                            <a class="carousel-control left" data-slide="prev" href="#demo-carousel"><i class="demo-psi-arrow-left icon-2x"></i></a>
                            <a class="carousel-control right" data-slide="next" href="#demo-carousel"><i class="demo-psi-arrow-right icon-2x"></i></a>

                        </div>


                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-lg-12">
                    <div class="panel panel-info panel-colorful">
                        <div class="panel-heading">
                            <h3 class="panel-title">Appliances</h3>
                        </div>
                        <div class="panel-body text-center">

                            <script src="js/demo/amcharts.js"></script>
                            <script src="js/demo/serial.js"></script>
                            <script src="js/demo/light.js"></script>
                            <script src="js/demo/gantt.js"></script>
                            <div id="chartdiv1" style="height: 242px">

                            </div> 
                        </div>   
                    </div>
                </div>

            </div>
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Vitals</h3>
                </div>
                <div class="panel-body text-center clearfix">

                    <div class="col-sm-4 pad-top">
                        <div class="text-lg">
                            <p class="text-3x text-bold text-main health_steps" style="color: #f1709c">10000</p>
                        </div>

                        <p class="text-lg text-bold text-uppercase word">STEPS</p>
                       <!--  <span class="label label-pink pull-right">75%</span>
                             <span class="label label-pink pull-left">75%</span> -->
                        <div class="progress progress-md" style="width: 75%;display: inline-block;">
                            <div style="width: 30%;" class="progress-bar progress-bar-pink health_steps_bar"></div>
                        </div> 

                    </div>
                    <div class="col-sm-8">
                        <button class="btn btn-pink mar-ver ">Analysis</button>
                        <p class="text-lg1">Daily Average of activities and Vitals</p>
                        <ul class="list-unstyled text-center bord-top pad-top mar-no row">
                            <li class="col-sm-4">
                                <span class="text-lg text-bold text-main word health_heart_rate">87</span>
                                <p class="text-sm text-muted mar-no" style="color: #f1709c">Heart Rate</p>
                            </li>
                            <li class="col-sm-4">
                                <span class="text-2x text-bold text-main word health_bp">112/89</span>
                                <p class="text-sm text-muted mar-no" style="color: #f1709c">Blood Pressure</p>
                            </li>
                            <li class="col-sm-4">

                                <span class="text-lg text-bold text-main word health_temp">37</span>
                                <!-- <strong>°C</strong>  -->
                                <p class="text-sm text-muted mar-no" style="color: #f1709c">Caleries </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-lg-11">
            <div class="row">
                <div class="col-md-3">
                    <div class="panel panel-danger panel-colorful media middle pad-all">
                        <div class="media-left">
                            <div class="pad-hor">
                                <img src="img/sos.png">
                            </div>
                        </div>
                        <div class="media-body">
                            <p class="text-2x mar-no text-semibold pull-right">OK</p>
                            <p class="mar-no">sos</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="panel panel-info panel-colorful media middle pad-all">
                        <div class="media-left">
                            <div class="pad-hor">
                                <img src="img/falls_alarm.png">
                            </div>
                        </div>
                        <div class="media-body">
                            <p class="text-2x mar-no text-semibold pull-right">ALERT</p>
                            <p class="mar-no">Falls</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="panel panel-purple panel-colorful media middle pad-all">
                        <div class="media-left">
                            <div class="pad-hor">
                                <img src="img/visitors.png">
                            </div>
                        </div>
                        <div class="media-body">
                            <p class="text-2x mar-no text-semibold pull-right">3</p>
                            <p class="mar-no">Visitors</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="panel panel-warning panel-colorful media middle pad-all">
                        <div class="media-left">
                            <div class="pad-hor">
                                <img src="img/Power.png">
                            </div>
                        </div>
                        <div class="media-body">
                            <p class="text-2x mar-no text-semibold pull-right">ON</p>
                            <p class="mar-no">Power</p>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
        <div class="col-sm-1 col-lg-1">
            <div class="row">
                <div class="col-sm-12 daterange">
                    <img src="img/calendar.png" style="border-radius:8px; ">

                    <span class="date1 text-3x" id="custome_date_current"></span>
                    <p class="date2 text-1x" id="custome_month_current"></p></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-lg-4">
            <!--List Todo-->
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <div class="panel panel-trans">
                <div class="panel-heading1">
                    <h3 class="panel-title">To do list</h3>
                </div>
                <div class="pad-ver">
                    <ul class="list-group bg-trans list-todo mar-no">
                        <li class="list-group-item">
                            <input id="demo-todolist-1" class="magic-checkbox" type="checkbox">
                            <label for="demo-todolist-1"><span>Call doctor <span class="label label-danger">Important</span></span></label>
                        </li>
                        <li class="list-group-item">
                            <input id="demo-todolist-2" class="magic-checkbox" checked="" type="checkbox">
                            <label for="demo-todolist-2"><span>Ask mum to walk more</span></label>
                        </li>
                        <li class="list-group-item">
                            <input id="demo-todolist-3" class="magic-checkbox" type="checkbox">
                            <label for="demo-todolist-3"><span>Order tablets</span></label>
                        </li>
                        <li class="list-group-item">
                            <input id="demo-todolist-4" class="magic-checkbox" type="checkbox">
                            <label for="demo-todolist-4"><span>Put hand rail in toilet <span class="label label-warning">Warning</span></span></label>
                        </li>
                        <li class="list-group-item">
                            <input id="demo-todolist-5" class="magic-checkbox" checked="" type="checkbox">
                            <label for="demo-todolist-5"><span>Take mum shopping <span class="label label-info">2 Mins</span></span></label>
                        </li>
                    </ul>
                </div>
                <div class="input-group pad-all">
                    <input class="form-control" placeholder="New task" autocomplete="off" type="text">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-success"><i class="demo-pli-add"></i></button>
                    </span>
                </div>
            </div>
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <!--End todo list-->
        </div>
        <div class="col-sm-6 col-lg-4">
            <div class="panel panel-trans">
                <div class="panel-heading1">
                    <div class="panel-control">
                        <a title="" data-html="true" data-container="body" data-original-title="<p class='h4 text-semibold'>Information</p><p style='width:150px'>This is an information bubble to help the user.</p>" href="#" class="demo-psi-information icon-lg icon-fw unselectable text-info add-tooltip"></a>
                    </div>
                    <h3 class="panel-title">Services</h3>
                </div>
                <div class="bord-btm">
                    <ul class="list-group bg-trans">
                        <li class="list-group-item">
                            <div class="pull-right">
                                <input id="demo-online-status-checkbox" class="toggle-switch" checked="" type="checkbox">
                                <label for="demo-online-status-checkbox"></label>
                            </div>
                            Privacy mode
                        </li>
                        <li class="list-group-item">
                            <div class="pull-right">
                                <input id="demo-show-off-contact-checkbox" class="toggle-switch" checked="" type="checkbox">
                                <label for="demo-show-off-contact-checkbox"></label>
                            </div>
                            Alerts and Notifications
                        </li>
                        <li class="list-group-item">
                            <div class="pull-right">
                                <input id="demo-show-device-checkbox" class="toggle-switch" type="checkbox">
                                <label for="demo-show-device-checkbox"></label>
                            </div>
                            Allow invitations
                        </li>
                    </ul>
                </div>
                <div class="panel-body">
                    <div class="pad-btm">
                        <p class="text-semibold text-main">Upgrade Progress</p>
                        <div class="progress progress-md">
                            <div class="progress-bar progress-bar-purple" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 15%;" role="progressbar">
                                <span class="sr-only">15%</span>
                            </div>
                        </div>
                        <small>15% Completed</small>
                    </div>
                    <div>
                        <p class="text-semibold text-main">Database</p>
                        <div class="progress progress-md">
                            <div class="progress-bar progress-bar-success" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;" role="progressbar">
                                <span class="sr-only">70%</span>
                            </div>
                        </div>
                        <small>70% Completed</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-lg-4">
            <div class="panel panel-trans">
                <div class="pad-all">
                    <div class="media mar-btm">
                        <div class="media-left">
                            <img src="img/profile-photos/2.png" class="img-md img-circle" alt="Avatar">
                        </div>
                        <div class="media-body">
                            <p class="text-lg text-main text-semibold mar-no">jane West</p>
                            <p>Carer</p>
                        </div>
                    </div>
                    <blockquote class="bq-sm bq-open bq-close">Mum needs more bread and milk as she has run out. Please add to her shopping </blockquote>
                </div>

                <div class="bord-top">
                    <ul class="list-group bg-trans bord-no">
                        <li class="list-group-item list-item-sm">
                            <div class="media-left">
                                <i class="demo-psi-facebook icon-lg"></i>
                            </div>
                            <div class="media-body">
                                <a href="#" class="btn-link text-semibold">Facebook</a>
                            </div>
                        </li>
                        <li class="list-group-item list-item-sm">
                            <div class="media-left">
                                <i class="demo-psi-twitter icon-lg"></i>
                            </div>
                            <div class="media-body">
                                <a href="#" class="btn-link text-semibold">@RalphWe</a>
                                <br> Design my themes with <a href="#" class="btn-link text-bold">#Bootstrap</a> Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            </div>
                        </li>
                        <li class="list-group-item list-item-sm">
                            <div class="media-left">
                                <i class="demo-psi-instagram icon-lg"></i>
                            </div>
                            <div class="media-body">
                                <a href="#" class="btn-link text-semibold">Ralphz</a>
                            </div>
                        </li>
                        <li class="list-group-item list-item-sm">
                            <div class="media-body">

                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row" id="Notification">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-xs-12 col-lg-12">
                    <div class="panel">
                        <div class="panel-heading" style="height:42px">
                            <h3 class="panel-title">Notification</h3>
                        </div>
                        <div class="panel-body">
                            <div class="pad-btm form-inline">
                                <div class="row">
                                    <div class="col-sm-6 table-toolbar-left">
                                        <button class="btn btn-purple"><i class="demo-pli-add icon-fw"></i>Add</button>
                                        <button class="btn btn-default"><i class="demo-pli-printer icon-lg"></i></button>
                                        <div class="btn-group">
                                            <button class="btn btn-default"><i class="demo-pli-information icon-lg"></i></button>
                                            <button class="btn btn-default"><i class="demo-pli-trash icon-lg"></i></button>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 table-toolbar-right">
                                        <div class="form-group">
                                            <input autocomplete="off" class="form-control" placeholder="Search" id="demo-input-search2" type="text">
                                        </div>
                                        <div class="btn-group">
                                            <button class="btn btn-default"><i class="demo-pli-download-from-cloud icon-lg"></i></button>
                                            <div class="btn-group dropdown">
                                                <button class="btn btn-default btn-active-primary dropdown-toggle" data-toggle="dropdown">
                                                    <i class="demo-pli-dot-vertical icon-lg"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                                    <li><a href="#">Action</a></li>
                                                    <li><a href="#">Another action</a></li>
                                                    <li><a href="#">Something else here</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#">Separated link</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table id="demo-dt-basic" class="table table-vcenter mar-top">
                                    <thead>
                                        <tr>
                                            <th class="min-w-td">#</th>
                                            <th class="min-w-td">Sensor</th>
                                            <th>Action</th>
                                            <th>Date/Time</th>
                                            <th>Priority</th>
                                            <th class="text-center">Activity Detected</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbody">
                                                                                 
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
<script src="{{asset("plugins")}}/moment/min/moment.min.js"></script>
<script src="{{asset("plugins")}}/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="{{asset("plugins")}}/datatables/media/js/jquery.dataTables.js"></script>
<script src="{{asset("plugins")}}/datatables/media/js/dataTables.bootstrap.js"></script>
<script src="{{asset("plugins")}}/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></
<script src="{{asset("js")}}/demo/tables-datatables.js"></script>
<script>
    var table;
    var time_flag=1440;
    var chart_1_data=[];
    var today_mom=moment();
    var tomorow_mom=moment();
    var today=today_mom.format("DD-MM-YYYY");
    var tomorrow =tomorow_mom.add(1,"days").format("DD-MM-YYYY");
    var my_t_date=today_mom.format("MM-DD-YYYY");
    var notification_count=0;
    $("#custome_date_current").html(today_mom.format('DD'));
    $("#custome_month_current").html(today_mom.format('MMM')); 
    var whereaboutdata={
        from:today,
        to:tomorrow,
        last_count_rooms:0,
        last_count_appliances:0,
        last_count_door:0,
        last_count_notifications:0
    };
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.daterange').daterangepicker({
            ranges   : {
              'Today'       : [moment(), moment()],
              'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
              'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          },
          startDate: moment().subtract(29, 'days'),
          endDate  : moment()
      }, function (start, end) {
        table.clear().draw();
        notification_count=0;
        my_t_date=start.format('DD-MM-YYYY');
        today_mom=start;
        $("#custome_date_current").html(start.format('DD'));
        $("#custome_month_current").html(start.format('MMM')); 
        whereaboutdata.from=today=start.format('DD-MM-YYYY');
        whereaboutdata.to=tommorow=end.format('DD-MM-YYYY');
    });
    });
</script>
<script type="text/javascript">
    AmCharts.useUTC = true;
    var chart = AmCharts.makeChart("chartdiv", {
        "type": "gantt",
        "theme": "light",
        "period": "mm",
        "dataDateFormat": "YYYY-MM-DD HH:NN",
        "balloonDateFormat": "QQQ",
        "columnWidth": 0.5,
        "plotAreaBorderColor":"#ff0000",
        "marginBottom": 30,
        "valueAxis": {
            "type": "date",
            "minPeriod": "fff",
            "ignoreAxisWidth": true
        },
        "brightnessStep": 10,
        "graph": {
            "fillAlphas": 1,
            "balloonText": "<b>[[task]]</b>: [[duration]]s"
        },
        "rotate": true,
        "categoryField": "category",
        "segmentsField": "segments",
        "colorField": "color",
        "startDate": "2015-01-01 00:00",
        "startField": "start",
        "endField": "end",
        "durationField": "duration",
        "dataProvider": [],
        "valueScrollbar": {
            "autoGridCount": true
        },
        "chartCursor": {
            "cursorColor": "#55bb76",
            "valueBalloonsEnabled": false,
            "cursorAlpha": 0,
            "valueLineAlpha": 0.5,
            "valueLineBalloonEnabled": true,
            "valueLineEnabled": true,
            "zoomable": false,
            "valueZoomable": true
        }
    });

    AmCharts.useUTC = true;
    var chart1 = AmCharts.makeChart("chartdiv1", {
        "type": "gantt",
        "theme": "light",
        "period": "mm",
        "dataDateFormat": "YYYY-MM-DD HH:NN",
        "balloonDateFormat": "QQQ",
        "columnWidth": 0.5,
        "color": "#FFFFFF",
        "marginBottom": 30,
        "valueAxis": {
            "type": "date",
            "minPeriod": "fff",
            "ignoreAxisWidth": true
        },
        "brightnessStep": 10,
        "graph": {
            "fillAlphas": 1,
            "balloonText": "<b>[[task]]</b>: [[duration]]s"
        },
        "rotate": true,
        "categoryField": "category",
        "segmentsField": "segments",
        "colorField": "color",
        "startDate": "2015-01-01 00:00",
        "startField": "start",
        "endField": "end",
        "durationField": "duration",
        "dataProvider": [],
        "valueScrollbar": {
            "autoGridCount": true
        },
        "chartCursor": {
            "cursorColor": "#0976a7",
            "valueBalloonsEnabled": false,
            "cursorAlpha": 0,
            "valueLineAlpha": 0.5,
            "valueLineBalloonEnabled": true,
            "valueLineEnabled": true,
            "zoomable": false,
            "valueZoomable": true
        }
    });
</script>
</body>
</html>
<script type="text/javascript">
    $(document).ready(function () {
        $(".image-rotate-click").click(function () {
            $(".image-rotate").toggleClass("img-rotate-property");
            $(".sidemenu-image").toggleClass("sidemenu-image-property");
        });
    });
</script>

<script>
    var t1=new Date(moment().format('YYYY/MM/DD')+" UTC").getTime();
    var t2=new Date(moment().format('YYYY/MM/DD')+" UTC").getTime();
    var URL="http://52.236.165.33/miicare/";
    table=$('#demo-dt-basic').DataTable( {
        "responsive": true,
        "language": {
            "paginate": {
              "previous": '<i class="demo-psi-arrow-left"></i>',
              "next": '<i class="demo-psi-arrow-right"></i>'
            }
        }
    } );
    function getWhereAboutData(){
        console.log(whereaboutdata);
        $.ajax({
            type:"GET",
            dataType: 'json',
            url: '<?=URL::to('/whereaboutdata');?>',
            //url: URL+'whereabouts',
            data: whereaboutdata
        }).done(function(data) {
            suceessWhereAboutData(data.data);
        });
    }
    function getAppliancessData(){
        $.ajax({
            type:"GET",
            dataType: 'json',
            url: '<?=URL::to('/appliancessdata');?>',
            //url: URL+'whereabouts',
            data: whereaboutdata
        }).done(function(data) {
            suceessAppalincessData(data.data);
        });
    }
    
    function getNotificationData(){
        whereaboutdata.notification_count=notification_count;
        $.ajax({
            type:"GET",
            dataType: 'json',
            url: '<?=URL::to('/notification');?>',
            //url: URL+'whereabouts',
            data: whereaboutdata
        }).done(function(data) {
            var str='';
            var monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun","Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
            var room_name = {
                "Kitchen" : "KIT", 
                "Toilet" : "TOI", 
                "Living Room" : "LIR", 
                "Office" : "OFF", 
                "Bed Room" : "BED", 
                "Bath Room" : "BAT",
                "Front Door" : "FRD", 
                "Back Door" : "BCD"
            };
            var giCount=1;
            console.log(data.data.length);
            if(!isNaN(data.data.length)){
                notification_count=notification_count+data.data.length;
            }
            for(var i in data.data){
                //console.log(data.data[i].createdOn);
                var d=new Date(parseInt(data.data[i].createdOn));
                table.rows.add( [ {
                    "0":       giCount,
                    "1":   '<span class="sensor_name">'+(room_name[data.data[i].sensore_name])+'</span>',
                    "2":    '<a class="btn-link" href="#">'+data.data[i].action+'</a>',
                    "3": (monthNames[d.getMonth()]+" "+d.getDate()+", "+d.getFullYear()),
                    "4":     '<span class="label label-table label-info">Priority 1</span>',
                    "5":      '<div class="btn-group text-center"><a class="btn btn-sm btn-default btn-hover-success demo-psi-pen-5 add-tooltip" href="#" data-original-title="Edit" data-container="body"></a><a class="btn btn-sm btn-default btn-hover-danger demo-pli-trash add-tooltip" href="#" data-original-title="Delete" data-container="body"></a><a class="btn btn-sm btn-default btn-hover-warning demo-pli-unlock add-tooltip" href="#" data-original-title="Ban user" data-container="body"></a></div>'
                }])
                .draw();
            }
        });
    }
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    function millisToMinutesAndSeconds(millis) {
        var minutes = Math.floor(millis / 60000);
        var seconds = ((millis % 60000) / 1000).toFixed(0);
        return minutes;
    }
    function suceessWhereAboutData(res){
        var chart_1_data=[];
        $.each(res.room, function( index, value ) {
            var temp={"category":index,"segments":[]};
            $.each(res.room_data[index], function( key, value ) {
                if(value.status==1){
                    if(Math.floor(millisToMinutesAndSeconds(value.createdOn-t1))<=time_flag){
                        var obj={
                            "start": Math.floor(millisToMinutesAndSeconds(value.createdOn-t1)),
                            "duration": 2,
                            "color": "#ff0000",
                            "task": "Task #"+value.sensor_data_id
                        };
                        temp.segments.push(obj);
                    }    
                }
            });
            chart_1_data.push(temp);
        });
        var a=new Date(today_mom.format('YYYY/MM/DD')+" UTC");
        console.log(a.getFullYear()+"-0"+(a.getMonth()+1)+"-"+a.getDate()+" 00:00:00");
        chart.startDate=a.getFullYear()+"-0"+(a.getMonth()+1)+"-"+a.getDate()+" 00:00:00";
        chart.dataProvider=chart_1_data;
        chart.validateData();
    }
    function suceessAppalincessData(res){
        chart1.dataProvider = [];
        var data=[];
        $.each(res.room, function( index, value ) {
            var temp={"category":index,"segments":[]};
            $.each(res.room_data[index], function( index, value ) {
                if(value.status==1){
                    if(Math.floor(millisToMinutesAndSeconds(value.createdOn-t1))<=time_flag){
                        var obj={
                            "start": Math.floor(millisToMinutesAndSeconds(value.createdOn-t1)),
                            "duration": 2,
                            "color": "#FFFFFF",
                            "task": "Task #"+value.sensor_data_id
                        };
                        temp.segments.push(obj);
                    }    
                }                    
            }); 
            data.push(temp);
        });
        var a=new Date(today_mom.format('YYYY/MM/DD')+" UTC");
        console.log(a);
        chart1.startDate=a.getFullYear()+"-0"+(a.getMonth()+1)+"-"+a.getDate()+" 00:00:00";
        chart1.dataProvider=data;
        chart1.validateData();
    }
    function getHealthData(){
        var user_id ='{{Auth::user()->id}}';
        $.ajax({
            type:"GET",
            dataType: 'json',
            url: '<?=URL::to('/health');?>',
            data: whereaboutdata
        })
        .done(function(data) 
        {
            var limit=10000;
            var per =(data.data.steps*100)/limit;
            var per=(isNaN(per)?0:per);
            $(".health_steps").text(data.data.steps);
            $(".health_bp").text("139/66");
            $(".health_heart_rate").text(data.data.heartRate);
            $(".health_steps_bar").css("width",per+'%');   
            $(".health_temp").text(data.data.calories); 
            console.log(data);
        });
    }
    $(document).ready(function(){
        $(".time-change").click(function(){
            var f=$(this).data("value");
            $(this).closest( ".dropdown" ).toggleClass("open");
            time_flag=f*60;
        });
    });
    setInterval(function(){
        getWhereAboutData();
        getAppliancessData();
        getNotificationData();
        getHealthData();
    },7000);
</script>
@endsection