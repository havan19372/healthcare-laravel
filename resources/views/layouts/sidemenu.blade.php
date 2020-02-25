<nav id="mainnav-container">
    <div class="sidemenu-image">
        <li class="tgl-menu-btn">
            <a class="mainnav-toggle push image-rotate-click" href="#">

            </a>
        </li>
    </div>
    <div id="mainnav">
        <div id="mainnav-menu-wrap">
            <div class="nano">
                <div class="nano-content">
                    <div id="mainnav-profile" class="mainnav-profile">
                        <div class="profile-wrap text-center">
                            <div class="pad-btm" style="margin-top: 10px;">
                                <img class="img-circle img-md" src="{{asset("uploads")."/".Auth::user()->profile_picture}}" alt="Profile Picture">
                            </div>
                            <a href="#profile-nav" class="box-block" data-toggle="collapse" aria-expanded="true">
                                <span class="pull-right dropdown-toggle">
                                    <i class="dropdown-caret"></i>
                                </span>
                                <p class="mnp-name">{{Auth::user()->name}}</p>
                                <span class="mnp-desc">UCRN: {{Auth::user()->username}}</span>
                            </a>
                        </div>
                        <div id="profile-nav" class="list-group bg-trans collapse in" aria-expanded="true" style="">
                            <a href="{{route('profile')}}" class="list-group-item">
                                <i class="demo-pli-male icon-lg icon-fw"></i> View Profile
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="demo-pli-gear icon-lg icon-fw"></i> Settings
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="demo-pli-information icon-lg icon-fw"></i> Help
                            </a>
                            <a href="{{route("logout")}}" class="list-group-item">
                                <i class="demo-pli-unlock icon-lg icon-fw"></i> Logout
                            </a>
                        </div>
                    </div>
                    <div id="mainnav-shortcut" class="hidden">
                        <ul class="list-unstyled shortcut-wrap">
                            <li class="col-xs-3" data-content="My Profile">
                                <a class="shortcut-grid" href="#">
                                    <div class="icon-wrap icon-wrap-sm icon-circle bg-mint">
                                        <i class="demo-pli-male"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="col-xs-3" data-content="Messages">
                                <a class="shortcut-grid" href="#">
                                    <div class="icon-wrap icon-wrap-sm icon-circle bg-warning">
                                        <i class="demo-pli-speech-bubble-3"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="col-xs-3" data-content="Activity">
                                <a class="shortcut-grid" href="#">
                                    <div class="icon-wrap icon-wrap-sm icon-circle bg-success">
                                        <i class="demo-pli-thunder"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="col-xs-3" data-content="Lock Screen">
                                <a class="shortcut-grid" href="#">
                                    <div class="icon-wrap icon-wrap-sm icon-circle bg-purple">
                                        <i class="demo-pli-lock-2"></i>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <ul id="mainnav-menu" class="list-group">

                        <li class="active-sub active">

                            <a href="#">
                                <i class="demo-pli-support"></i>
                                <span class="menu-title list-header">EMERGENCY CONTACT</span>
                                <i class="arrow"></i>
                            </a>
                            <ul class="collapse in" aria-expanded="false">
                                <li class="active-link"><a href="#">07717667456</a></li>
                                <li><a href="#">07502345062</a></li>
                            </ul>
                        </li>
                        <li class="list-divider"></li>    

                        <li>
                            <a href="#Notification" id="menu-Notification">
                                <i class="demo-pli-gear"></i>
                                <span class="menu-title list-header">
                                    Notification
                                    <span class="pull-right badge badge-warning">24</span>
                                </span>
                            </a>
                        </li>
                        <li class="list-divider"></li>
                        <li>
                            <a href="#">
                                <i class="demo-pli-file-html"></i>
                                <span class="menu-title list-header">Ambulance details</span>
                                <i class="arrow"></i>
                            </a>


                            <ul class="collapse" aria-expanded="false">
                                <li><a href="#">45, Heaven Way,Chatham, ME4 6LT</a></li>
                                <li><a href="#">DoB: 28th Aug 1934</a></li>
                                <li><a href="#">Door entry code: 3210</a></li>
                                <li class="list-divider"></li>
                            </ul>
                        </li>

                        <li class="list-divider"></li>
                        <li>
                            <a href="#">
                                <i class="demo-pli-bar-chart"></i>       
                                <span class="menu-title list-header">Known Conditions </span>
                                <i class="arrow"></i>
                            </a>
                            <ul class="collapse" aria-expanded="false">
                                <li><a href="#">Diabetes</a></li>
                                <li><a href="#">Dementia</a></li>
                                <li><a href="#">Frail</a></li>
                                <li><a href="#">High Blood pressure</a></li>
                            </ul>
                        </li>
                        <li class="list-divider"></li>    

                        <li>
                            <a href="#">
                                <i class="demo-pli-receipt-4"></i>
                                <span class="menu-title list-header">Doctor’s Details</span>
                                <i class="arrow"></i>
                            </a>
                            <ul class="collapse" aria-expanded="false">
                                <li><a href="#">Dr Lawrence</a></li>
                                <li><a href="#">St Mary’s Island</a></li>
                                <li><a href="#">07716765421</a></li>
                                <li><a href="#">01634677677</a></li>
                            </ul>
                        </li>
                        <li class="list-divider"></li>
                        
                        <li>
                            <a href="{{route('users')}}">
                                <i class="fa fa-users"></i>
                                <span class="menu-title list-header">
                                    Users
                                </span>
                            </a>
                        </li>
                        <li class="list-divider"></li>
                        
                    </ul>                           
                </div>

            </div>
        </div>
    </div> 
</nav>