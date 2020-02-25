<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Dashboard | Micare </title>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
        <link href="{{asset('css')}}/bootstrap.min.css" rel="stylesheet">
        <link href="{{asset('css')}}/nifty.min.css" rel="stylesheet">
        <link href="{{asset('css')}}/demo/nifty-demo-icons.min.css" rel="stylesheet">
        <link href="{{asset('plugins')}}/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="{{asset('plugins')}}/pace/pace.min.css" rel="stylesheet">
        <script src="{{asset('plugins')}}/pace/pace.min.js"></script>
        <link href="{{asset('css')}}/demo/nifty-demo.min.css" rel="stylesheet">
        
    </head>
    <body>
        <div id="container" class="effect aside-float aside-bright mainnav-out">
            <header id="navbar">
                <div id="navbar-container" class="boxed">

                    <div class="navbar-header">
                        <a href="{{route("main")}}" class="navbar-brand">
                            <img src="{{asset('img')}}/micare.png" alt="Nifty Logo" class="brand-icon">
                            <div class="brand-title">
                                <span class="brand-text"></span>
                            </div>
                        </a>
                    </div>

                    <div class="navbar-content">
                        <ul class="nav navbar-top-links">

                            <!--Navigation toogle button-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <li class="tgl-menu-btn">
                                <a class="mainnav-toggle" href="#">
                                    <i class="demo-pli-list-view"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav navbar-top-links">
                            <li class="mega-dropdown">
                                <a href="#" class="mega-dropdown-toggle">
                                    <i class="demo-pli-layout-grid"></i>
                                </a> 
                                <div class="dropdown-menu mega-dropdown-menu" style="opacity: 1;">
                                    <div class="row">
                                        <div class="col-sm-4 col-md-3">

                                            <!--Mega menu list-->
                                            <ul class="list-unstyled">
                                                <li class="dropdown-header"><i class="demo-pli-file icon-lg icon-fw"></i> Pages</li>
                                                <li><a href="#">Profile</a></li>
                                                <li><a href="#">Search Result</a></li>
                                                <li><a href="#">FAQ</a></li>
                                                <li><a href="#">Sreen Lock</a></li>
                                                <li><a href="#">Maintenance</a></li>
                                                <li><a href="#">Invoice</a></li>
                                                <li><a href="#" class="disabled">Disabled</a></li>                                        </ul>

                                        </div>
                                        <div class="col-sm-4 col-md-3">

                                            <!--Mega menu list-->
                                            <ul class="list-unstyled">
                                                <li class="dropdown-header"><i class="demo-pli-mail icon-lg icon-fw"></i> Mailbox</li>
                                                <li><a href="#"><span class="pull-right label label-danger">Hot</span>Indox</a></li>
                                                <li><a href="#">Read Message</a></li>
                                                <li><a href="#">Compose</a></li>
                                                <li><a href="#">Template</a></li>
                                            </ul>
                                            <p class="pad-top text-main text-sm text-uppercase text-bold"><i class="icon-lg demo-pli-calendar-4 icon-fw"></i>News</p>
                                            <p class="pad-top mar-top bord-top text-sm">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                                        </div>
                                        <div class="col-sm-4 col-md-3">
                                            <!--Mega menu list-->
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="#" class="media mar-btm">
                                                        <span class="badge badge-success pull-right">90%</span>
                                                        <div class="media-left">
                                                            <i class="demo-pli-data-settings icon-2x"></i>
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="text-semibold text-main mar-no">Data Backup</p>
                                                            <small class="text-muted">This is the item description</small>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="media mar-btm">
                                                        <div class="media-left">
                                                            <i class="demo-pli-support icon-2x"></i>
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="text-semibold text-main mar-no">Support</p>
                                                            <small class="text-muted">This is the item description</small>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="media mar-btm">
                                                        <div class="media-left">
                                                            <i class="demo-pli-computer-secure icon-2x"></i>
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="text-semibold text-main mar-no">Security</p>
                                                            <small class="text-muted">This is the item description</small>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="media mar-btm">
                                                        <div class="media-left">
                                                            <i class="demo-pli-map-2 icon-2x"></i>
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="text-semibold text-main mar-no">Location</p>
                                                            <small class="text-muted">This is the item description</small>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-12 col-md-3">
                                            <p class="dropdown-header"><i class="demo-pli-file-jpg icon-lg icon-fw"></i> Gallery</p>
                                            <div class="row img-gallery">
                                                <div class="col-xs-4">
                                                    <img class="img-responsive" src="{{asset('img')}}/thumbs/img-1.jpg" alt="thumbs">
                                                </div>
                                                <div class="col-xs-4">
                                                    <img class="img-responsive" src="{{asset('img')}}/thumbs/img-3.jpg" alt="thumbs">
                                                </div>
                                                <div class="col-xs-4">
                                                    <img class="img-responsive" src="{{asset('img')}}/thumbs/img-2.jpg" alt="thumbs">
                                                </div>
                                                <div class="col-xs-4">
                                                    <img class="img-responsive" src="{{asset('img')}}/thumbs/img-4.jpg" alt="thumbs">
                                                </div>
                                                <div class="col-xs-4">
                                                    <img class="img-responsive" src="{{asset('img')}}/thumbs/img-6.jpg" alt="thumbs">
                                                </div>
                                                <div class="col-xs-4">
                                                    <img class="img-responsive" src="{{asset('img')}}/thumbs/img-5.jpg" alt="thumbs">
                                                </div>
                                            </div>
                                            <a href="#" class="btn btn-block btn-primary">Browse Gallery</a>
                                        </div>
                                    </div>
                                </div>                          
                            </li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                                    <i class="demo-pli-bell"></i>
                                    <span class="badge badge-header badge-danger"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                    <div class="nano scrollable">
                                        <div class="nano-content">
                                            <ul class="head-list">
                                                <li>
                                                    <a href="#" class="media add-tooltip" data-title="Used space : 95%" data-container="body" data-placement="bottom">
                                                        <div class="media-left">
                                                            <i class="demo-pli-data-settings icon-2x text-main"></i>
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="text-nowrap text-main text-semibold">HDD is full</p>
                                                            <div class="progress progress-sm mar-no">
                                                                <div style="width: 95%;" class="progress-bar progress-bar-danger">
                                                                    <span class="sr-only">95% Complete</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="media" href="#">
                                                        <div class="media-left">
                                                            <i class="demo-pli-file-edit icon-2x"></i>
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="mar-no text-nowrap text-main text-semibold">Write a news article</p>
                                                            <small>Last Update 8 hours ago</small>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="media" href="#">
                                                        <span class="label label-info pull-right">New</span>
                                                        <div class="media-left">
                                                            <i class="demo-pli-speech-bubble-7 icon-2x"></i>
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="mar-no text-nowrap text-main text-semibold">Comment Sorting</p>
                                                            <small>Last Update 8 hours ago</small>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="media" href="#">
                                                        <div class="media-left">
                                                            <i class="demo-pli-add-user-star icon-2x"></i>
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="mar-no text-nowrap text-main text-semibold">New User Registered</p>
                                                            <small>4 minutes ago</small>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="media" href="#">
                                                        <div class="media-left">
                                                            <img class="img-circle img-sm" alt="Profile Picture" src="{{asset('img')}}/profile-photos/9.png">
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="mar-no text-nowrap text-main text-semibold">Lucy sent you a message</p>
                                                            <small>30 minutes ago</small>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="media" href="#">
                                                        <div class="media-left">
                                                            <img class="img-circle img-sm" alt="Profile Picture" src="{{asset('img')}}/profile-photos/3.png">
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="mar-no text-nowrap text-main text-semibold">Jackson sent you a message</p>
                                                            <small>40 minutes ago</small>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="pad-all bord-top">
                                        <a href="#" class="btn-link text-main box-block">
                                            <i class="pci-chevron chevron-right pull-right"></i>Show All Notificatio
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li id="dropdown-user" class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
                                    <span class="ic-user pull-right">
                                        <i class="demo-pli-male"></i>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right panel-default">
                                    <ul class="head-list">
                                        <li>
                                            <a href="{{route("profile")}}"><i class="demo-pli-male icon-lg icon-fw"></i> Profile</a>
                                        </li>
                                        <li>
                                            <a href="#"><span class="badge badge-danger pull-right">9</span><i class="demo-pli-mail icon-lg icon-fw"></i> Messages</a>
                                        </li>
                                        <li>
                                            <a href="#"><span class="label label-success pull-right">New</span><i class="demo-pli-gear icon-lg icon-fw"></i> Settings</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="demo-pli-computer-secure icon-lg icon-fw"></i> Lock screen</a>
                                        </li>
                                        <li>
                                            <a href="{{route("logout")}}"><i class="demo-pli-unlock icon-lg icon-fw"></i> Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#" class="aside-toggle">
                                    <i class="demo-pli-dot-vertical"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </header>
            <div class="boxed">
                <div id="content-container">
                    @yield('content')
                    <aside id="aside-container">
                        <div id="aside">
                            <div class="nano has-scrollbar">
                                <div class="nano-content" tabindex="0" style="right: -17px;">

                                    <!--Nav tabs-->
                                    <!--================================-->
                                    <ul class="nav nav-tabs nav-justified">
                                        <li class="active">
                                            <a href="#demo-asd-tab-1" data-toggle="tab">
                                                <i class="demo-pli-speech-bubble-7 icon-lg"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#demo-asd-tab-2" data-toggle="tab">
                                                <i class="demo-pli-information icon-lg icon-fw"></i> Report
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#demo-asd-tab-3" data-toggle="tab">
                                                <i class="demo-pli-wrench icon-lg icon-fw"></i> Settings
                                            </a>
                                        </li>
                                    </ul>
                                    <!--================================-->
                                    <!--End nav tabs-->



                                    <!-- Tabs Content -->
                                    <!--================================-->
                                    <div class="tab-content">

                                        <!--First tab (Contact list)-->
                                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                        <div class="tab-pane fade in active" id="demo-asd-tab-1">
                                            <p class="pad-all text-main text-sm text-uppercase text-bold">
                                                <span class="pull-right badge badge-warning">3</span> Family
                                            </p>

                                            <!--Family-->
                                            <div class="list-group bg-trans">
                                                <a href="#" class="list-group-item">
                                                    <div class="media-left pos-rel">
                                                        <img class="img-circle img-xs" src="{{asset('img')}}/profile-photos/2.png" alt="Profile Picture">
                                                        <i class="badge badge-success badge-stat badge-icon pull-left"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="mar-no text-main">Stephen Tran</p>
                                                        <small class="text-muteds">Availabe</small>
                                                    </div>
                                                </a>
                                                <a href="#" class="list-group-item">
                                                    <div class="media-left pos-rel">
                                                        <img class="img-circle img-xs" src="{{asset('img')}}/profile-photos/7.png" alt="Profile Picture">
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="mar-no text-main">Brittany Meyer</p>
                                                        <small class="text-muteds">I think so</small>
                                                    </div>
                                                </a>
                                                <a href="#" class="list-group-item">
                                                    <div class="media-left pos-rel">
                                                        <img class="img-circle img-xs" src="{{asset('img')}}/profile-photos/1.png" alt="Profile Picture">
                                                        <i class="badge badge-info badge-stat badge-icon pull-left"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="mar-no text-main">Jack George</p>
                                                        <small class="text-muteds">Last Seen 2 hours ago</small>
                                                    </div>
                                                </a>
                                                <a href="#" class="list-group-item">
                                                    <div class="media-left pos-rel">
                                                        <img class="img-circle img-xs" src="{{asset('img')}}/profile-photos/4.png" alt="Profile Picture">
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="mar-no text-main">Donald Brown</p>
                                                        <small class="text-muteds">Lorem ipsum dolor sit amet.</small>
                                                    </div>
                                                </a>
                                                <a href="#" class="list-group-item">
                                                    <div class="media-left pos-rel">
                                                        <img class="img-circle img-xs" src="{{asset('img')}}/profile-photos/8.png" alt="Profile Picture">
                                                        <i class="badge badge-warning badge-stat badge-icon pull-left"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="mar-no text-main">Betty Murphy</p>
                                                        <small class="text-muteds">Idle</small>
                                                    </div>
                                                </a>
                                                <a href="#" class="list-group-item">
                                                    <div class="media-left pos-rel">
                                                        <img class="img-circle img-xs" src="{{asset('img')}}/profile-photos/9.png" alt="Profile Picture">
                                                        <i class="badge badge-danger badge-stat badge-icon pull-left"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="mar-no text-main">Samantha Reid</p>
                                                        <small class="text-muteds">Offline</small>
                                                    </div>
                                                </a>
                                            </div>

                                            <hr>
                                            <p class="pad-all text-main text-sm text-uppercase text-bold">
                                                <span class="pull-right badge badge-success">Offline</span> Friends
                                            </p>

                                            <!--Works-->
                                            <div class="list-group bg-trans">
                                                <a href="#" class="list-group-item">
                                                    <span class="badge badge-purple badge-icon badge-fw pull-left"></span> Joey K. Greyson
                                                </a>
                                                <a href="#" class="list-group-item">
                                                    <span class="badge badge-info badge-icon badge-fw pull-left"></span> Andrea Branden
                                                </a>
                                                <a href="#" class="list-group-item">
                                                    <span class="badge badge-success badge-icon badge-fw pull-left"></span> Johny Juan
                                                </a>
                                                <a href="#" class="list-group-item">
                                                    <span class="badge badge-danger badge-icon badge-fw pull-left"></span> Susan Sun
                                                </a>
                                            </div>


                                            <hr>
                                            <p class="pad-all text-main text-sm text-uppercase text-bold">News</p>

                                            <div class="pad-hor">
                                                <p>Lorem ipsum dolor sit amet, consectetuer
                                                    <a data-title="45%" class="add-tooltip text-semibold text-main" href="#" data-original-title="" title="">adipiscing elit</a>, sed diam nonummy nibh. Lorem ipsum dolor sit amet.
                                                </p>
                                                <small><em>Last Update : Des 12, 2014</em></small>
                                            </div>


                                        </div>
                                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                        <!--End first tab (Contact list)-->


                                        <!--Second tab (Custom layout)-->
                                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                        <div class="tab-pane fade" id="demo-asd-tab-2">

                                            <!--Monthly billing-->
                                            <div class="pad-all">
                                                <p class="pad-ver text-main text-sm text-uppercase text-bold">Billing &amp; reports</p>
                                                <p>Get <strong class="text-main">$5.00</strong> off your next bill by making sure your full payment reaches us before August 5, 2018.</p>
                                            </div>
                                            <hr class="new-section-xs">
                                            <div class="pad-all">
                                                <span class="pad-ver text-main text-sm text-uppercase text-bold">Amount Due On</span>
                                                <p class="text-sm">August 17, 2018</p>
                                                <p class="text-2x text-thin text-main">$83.09</p>
                                                <button class="btn btn-block btn-success mar-top">Pay Now</button>
                                            </div>


                                            <hr>

                                            <p class="pad-all text-main text-sm text-uppercase text-bold">Additional Actions</p>

                                            <!--Simple Menu-->
                                            <div class="list-group bg-trans">
                                                <a href="#" class="list-group-item"><i class="demo-pli-information icon-lg icon-fw"></i> Service Information</a>
                                                <a href="#" class="list-group-item"><i class="demo-pli-mine icon-lg icon-fw"></i> Usage Profile</a>
                                                <a href="#" class="list-group-item"><span class="label label-info pull-right">New</span><i class="demo-pli-credit-card-2 icon-lg icon-fw"></i> Payment Options</a>
                                                <a href="#" class="list-group-item"><i class="demo-pli-support icon-lg icon-fw"></i> Message Center</a>
                                            </div>


                                            <hr>

                                            <div class="text-center">
                                                <div><i class="demo-pli-old-telephone icon-3x"></i></div>
                                                Questions?
                                                <p class="text-lg text-semibold text-main"> (415) 234-53454 </p>
                                                <small><em>We are here 24/7</em></small>
                                            </div>
                                        </div>
                                        <!--End second tab (Custom layout)-->
                                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


                                        <!--Third tab (Settings)-->
                                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                        <div class="tab-pane fade" id="demo-asd-tab-3">
                                            <ul class="list-group bg-trans">
                                                <li class="pad-top list-header">
                                                    <p class="text-main text-sm text-uppercase text-bold mar-no">Account Settings</p>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="pull-right">
                                                        <input class="toggle-switch" id="demo-switch-1" checked="" type="checkbox">
                                                        <label for="demo-switch-1"></label>
                                                    </div>
                                                    <p class="mar-no text-main">Show my personal status</p>
                                                    <small class="text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</small>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="pull-right">
                                                        <input class="toggle-switch" id="demo-switch-2" checked="" type="checkbox">
                                                        <label for="demo-switch-2"></label>
                                                    </div>
                                                    <p class="mar-no text-main">Show offline contact</p>
                                                    <small class="text-muted">Aenean commodo ligula eget dolor. Aenean massa.</small>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="pull-right">
                                                        <input class="toggle-switch" id="demo-switch-3" type="checkbox">
                                                        <label for="demo-switch-3"></label>
                                                    </div>
                                                    <p class="mar-no text-main">Invisible mode </p>
                                                    <small class="text-muted">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </small>
                                                </li>
                                            </ul>


                                            <hr>

                                            <ul class="list-group pad-btm bg-trans">
                                                <li class="list-header"><p class="text-main text-sm text-uppercase text-bold mar-no">Public Settings</p></li>
                                                <li class="list-group-item">
                                                    <div class="pull-right">
                                                        <input class="toggle-switch" id="demo-switch-4" checked="" type="checkbox">
                                                        <label for="demo-switch-4"></label>
                                                    </div>
                                                    Online status
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="pull-right">
                                                        <input class="toggle-switch" id="demo-switch-5" checked="" type="checkbox">
                                                        <label for="demo-switch-5"></label>
                                                    </div>
                                                    Show offline contact
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="pull-right">
                                                        <input class="toggle-switch" id="demo-switch-6" checked="" type="checkbox">
                                                        <label for="demo-switch-6"></label>
                                                    </div>
                                                    Show my device icon
                                                </li>
                                            </ul>



                                            <hr>

                                            <p class="pad-hor text-main text-sm text-uppercase text-bold mar-no">Task Progress</p>
                                            <div class="pad-all">
                                                <p class="text-main">Upgrade Progress</p>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar progress-bar-success" style="width: 15%;"><span class="sr-only">15%</span></div>
                                                </div>
                                                <small>15% Completed</small>
                                            </div>
                                            <div class="pad-hor">
                                                <p class="text-main">Database</p>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar progress-bar-danger" style="width: 75%;"><span class="sr-only">75%</span></div>
                                                </div>
                                                <small>17/23 Database</small>
                                            </div>

                                        </div>
                                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                        <!--Third tab (Settings)-->

                                    </div>
                                </div>
                                <div class="nano-pane"><div class="nano-slider" style="height: 693px; transform: translate(0px, 0px);"></div></div></div>
                        </div>
                    </aside>

                    <footer id="footer">

                        <p class="pad-lft">&#0169; Copyright miiCARE 2016</p>
                    </footer>
                    <button class="scroll-top btn in" style="animation: 0.8s ease 0s 1 normal none running jellyIn;">
                        <i class="pci-chevron chevron-up"></i>
                    </button>
                </div>
                <script
                src="http://code.jquery.com/jquery-3.3.1.min.js"
                integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
                crossorigin="anonymous"></script>
                <script src="{{asset('js')}}/bootstrap.min.js"></script>
                <script src="{{asset('js')}}/nifty.min.js"></script>
                <script src="{{asset('js')}}/demo/nifty-demo.min.js"></script>

                <script src="{{asset('plugins')}}/flot-charts/jquery.flot.min.js"></script>
                <script src="{{asset('plugins')}}/flot-charts/jquery.flot.resize.min.js"></script>
                <script src="{{asset('plugins')}}/flot-charts/jquery.flot.tooltip.min.js"></script>
                <script src="{{asset('plugins')}}/sparkline/jquery.sparkline.min.js"></script>
                <script src="{{asset('js')}}/demo/dashboard.js"></script>
                <script>
                    $("#menu-Notification").click(function() {
                        $('html, body').animate({
                            scrollTop: $("#Notification").offset().top
                        }, 2000);
                    });
//                    $(document).on('click', '#mainnav-menu-wrap', function (event) {
//                        event.preventDefault();
//                        $('html, body').animate({
//                            scrollTop: $($.attr(this, 'href')).offset().top
//                        }, 800);
//                    });
                </script>
                @yield('js')
                
                