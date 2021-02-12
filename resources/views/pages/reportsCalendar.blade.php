@extends('layouts.layout')

@section('content')
<head>
    <link rel="stylesheet" type="text/css" href="{{asset('css/reportsCalendar.css')}}">
    <title>Reports</title>
    
    <!--RealTime Clock-->
    <script>
        function realTimeClock(){
          
          var rtClock = new Date();

          var month = rtClock.getMonth();
          var day = rtClock.getDate();
          var year = rtClock.getFullYear();

          document.getElementById('date').innerHTML = year + " / " + day + " / " + month;
          var t = setTimeout(realTimeClock, 500);
        }
      </script>
</head>

<body onload="realTimeClock();">

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--Preloader end-->

    
    <!--Main wrapper start-->
    <div id="main-wrapper">
        <!--Content body start-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Business Total Amount Calendar</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped" id="calendarTbl">
                                        <thead>
                                            <tr>
                                                <th colspan="6" style="text-align: center;">TOTAL AMOUNT</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="text-align: center;">JAN.</td>
                                                <td style="text-align: center;">FEB.</td>
                                                <td style="text-align: center;">MAR.</td>
                                                <td style="text-align: center;">APR.</td>
                                                <td style="text-align: center;">MAY</td>
                                                <td style="text-align: center;">JUNE</td>
                                            </tr>
                                            <tr>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                            </tr>
                                            <tr>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                            </tr>
                                            <tr>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                            </tr>
                                            <tr>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                            </tr>
                                            <tr>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                            </tr>
                                            <tr>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                            </tr>
                                            <tr>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div><span>Total Revenue: <input type="text" class="input"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Business Revenue Calendar</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped" id="calendarTbl">
                                        <thead>
                                            <tr>
                                                <th colspan="6" style="text-align: center;">REVENUE</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="text-align: center;">JAN.</td>
                                                <td style="text-align: center;">FEB.</td>
                                                <td style="text-align: center;">MAR.</td>
                                                <td style="text-align: center;">APR.</td>
                                                <td style="text-align: center;">MAY</td>
                                                <td style="text-align: center;">JUNE</td>
                                            </tr>
                                            <tr>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                            </tr>
                                            <tr>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                            </tr>
                                            <tr>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                            </tr>
                                            <tr>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                            </tr>
                                            <tr>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                            </tr>
                                            <tr>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                            </tr>
                                            <tr>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div><span>Total Revenue: <input type="text" class="input"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
            <!-- row -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Business Expenses Calendar</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped" id="calendarTbl">
                                        <thead>
                                            <tr>
                                                <th colspan="6" style="text-align: center;">EXPENSES</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="text-align: center;">JAN.</td>
                                                <td style="text-align: center;">FEB.</td>
                                                <td style="text-align: center;">MAR.</td>
                                                <td style="text-align: center;">APR.</td>
                                                <td style="text-align: center;">MAY</td>
                                                <td style="text-align: center;">JUNE</td>
                                            </tr>
                                            <tr>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                            </tr>
                                            <tr>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                            </tr>
                                            <tr>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                            </tr>
                                            <tr>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                            </tr>
                                            <tr>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                            </tr>
                                            <tr>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                            </tr>
                                            <tr>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                                <td>10000</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <span>Total Expenses: <input type="text" class="input"></span>
                                <input type="image" src="image/print.svg" width="50px" height="50px" style="position: relative; top: 20px;" onclick="printContent('calendar')">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!--Content body end-->

    </div>
    <!--Main wrapper end-->

    {{-- <!--Scripts-->
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>

    <script src="./plugins/tables/js/jquery.dataTables.min.js"></script>
    <script src="./plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="./plugins/tables/js/datatable-init/datatable-basic.min.js"></script> --}}
</body> 
@endsection