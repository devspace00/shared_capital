<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <!-- Favicon icon -->
    <link rel = "icon" href="image/Logo.png">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/layout.css')}}">
    <link href="./plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">   
</head>

    <!--Nav header start-->
    <!--This is the LOGO-->
    {{-- <div class="nav-header">
        <img src="image/shape.png" width="660px" height="535px" style="position: relative; right: 281px; bottom: 321px;">
    </div> --}}
    <!--Nav header end-->

    <!--Header start-->
    <div class="header">    
        <div class="header-content clearfix">
            {{-- <div class="nav-control">
                <div class="hamburger">
                    <span class="toggle-icon"><i class="icon-menu"></i></span>
                </div>
            </div> --}}
            <div class="header-left">
                <div class="input-group icons">
                    <div class="input-group-prepend">
                        <img src="image/Logo.png" width="50px" height="50px">
                        <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1">Mahabang Parang Waterworks Cooperative</span>
                    </div>
                    <div style="margin-left: 450px">
                        <h5 class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1">Hello, {{session('username')}}</h5>
                    </div>
                </div>
            </div>
            
            <div class="header-right">
                <ul class="clearfix">
                    <li class="icons dropdown">
                        <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                            <span class="activity active"></span>
                            <img src="image/woman.svg" height="40" width="40" alt=""  >
                        </div>
                        <div class="drop-down dropdown-profile   dropdown-menu">
                            <div class="dropdown-content-body">
                                <ul>
                                    {{-- <li>
                                        <a href="{{ route('profile') }}"><i class="icon-user"></i> <span>Profile</span></a>
                                    </li> --}}

                                    {{-- <hr class="my-2"> --}}
                                    <li><a href="/logout"><i class="icon-key"></i><span>Logout</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--Header end ti-comment-alt-->

    <!--Sidebar start-->
    <div class="nk-sidebar">           
        <div class="nk-nav-scroll">
            <ul class="metismenu" id="menu">
                <li class="nav-label">Dashboard</li>  
                <li>   
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-menu menu-icon"></i><span class="nav-text">View</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('transHistory') }}" aria-expanded="false">Transaction History</a></li>
                            <li><a href="{{ route('membersHistory') }}">Members History</a></li>                           
                            <li><a href="{{ route('membersContri') }}" aria-expanded="false">{{--<img src="image/contribution.png" width="15px" height="15px" style="margin-right: 5px;">--}}Members Contribution</a></li>
                            <li><a href="{{ route('reportsCalendar') }}">Business Reports Calendar</a></li>
                            <li><a href="{{ route('reportsHistory') }}">Business Reports History</a></li>
                        </ul>
                    </li> 

                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-note menu-icon"></i><span class="nav-text">Confirmation</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('transactions') }}" aria-expanded="false">Transaction Request</a></li>
                            <li><a href="{{ route('reports') }}">Business Reports Request</a></li>
                            <li><a href="{{ route('membersRequest') }}">Members Request</a></li>
                        </ul>
                    </li>

                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-screen-tablet menu-icon"></i><span class="nav-text">Edit</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('membersList') }}">Members List</a></li>
                            <div class="dropdown">
                                <span class="dropbtn">Employees Tool Access</span>
                                <div class="dropdown-content">
                                <a href="{{ route('membersRequest') }}">Account Creation</a>
                                <a href="{{ route('transHistory') }}">Transaction</a>
                                </div>
                            </div>
                        </ul>
                    </li>
                    
                </li>
            </ul>
        </div>
    </div>
<!--Sidebar end-->

@yield('content')

 <!--Scripts-->
 <script src="plugins/common/common.min.js"></script>
 <script src="js/custom.min.js"></script>
 <script src="js/settings.js"></script>
 <script src="js/gleek.js"></script>
 <script src="js/styleSwitcher.js"></script>

 <script src="./plugins/tables/js/jquery.dataTables.min.js"></script>
 <script src="./plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
 <script src="./plugins/tables/js/datatable-init/datatable-basic.min.js"></script>
</html>