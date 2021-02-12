@extends('layouts.layout')

@section('content')
<head>
    <link rel="stylesheet" type="text/css" href="{{asset('css/transHistory.css')}}">
    <title>Members</title>
    <!--Add Row for Cash In-->
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
      <!--For Print-->
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
                                <div>
                                    <div style="text-align: center;">
                                        <input type="image" src="image/history.svg" width="80px" height="80px">
                                        <h1 class="card-title">Client History</h1>    
                                    </div> 
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration" id="historyTable">
                                        <caption><strong>Year 2020</strong></caption>
                                        <thead>
                                            <tr>
                                                <th style="text-align: center;" colspan="9">Client History</th>
                                            </tr>
                                            <tr>
                                                <td>ID</td>
                                                <td>Full Name</td>
                                                <td>Gender</td>
                                                <td>Email Address</td>
                                                <td>Requested By</td>
                                                <td>Approved By</td>
                                            </tr>
                                        </thead>
                                        @foreach ($clientUser as $cUser)
                                            <tr>
                                                <td>{{$cUser['client_id']}}</td>
                                                <td>{{$cUser['fName'] . " " . $cUser['mName'] . 
                                                " " . $cUser['lName']}}</td>
                                                <td>{{$cUser['gender']}}</td>
                                                <td>{{$cUser['email']}}</td>
                                                <td>{{session('username')}}</td>
                                                <td>Approved By</td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
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
</body>
@endsection