@extends('layouts.layout')

@section('content')
<head>
    <link rel="stylesheet" type="text/css" href="{{asset('css/transHistory.css')}}">
    <title>Reports</title>
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
      <script>
        function printContent(el){
          var restorePage = document.body.innerHTML;
          var printcontent = document.getElementById(el).innerHTML; 
          document.body.innerHTML = printcontent;
          window.print();
          document.body.innerHTML = restorePage;
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
                                <div>
                                    <div style="text-align: center;">
                                        <input type="image" src="image/history.svg" width="80px" height="80px">
                                        <h1 class="card-title">Reports History</h1>    
                                    </div> 
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration" id="historyTable">
                                        <caption><strong>Year 2020</strong></caption>
                                        <thead>
                                            <tr>
                                                <th style="text-align: center;" colspan="9">Reports History</th>
                                            </tr>
                                            <tr>
                                                <td>Date</td>
                                                <td>Amount</td>
                                                <td>Business Line</td>
                                                <td>Date</td>
                                                <td>Amount</td>
                                                <td>Business Line</td>
                                                <td>Reason</td>
                                                <td>Requested By</td>
                                                <td>Approved By</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <tr>
                                                <td>2019/20/01</td>
                                                <td style="color: rgb(68, 195, 238);">10000</td>
                                                <td>Barber Shop</td>
                                                <td>2019/25/01</td>
                                                <td style="color: red;">5000</td>
                                                <td>Vape Shop</td>
                                                <td>Buy Juice</td> 
                                                <td>Jason Gerona</td>
                                                <td>Rogelio Mangahas</td>
                                            </tr>
                                            <tr>
                                                <td>2019/10/02</td>
                                                <td style="color: rgb(68, 195, 238);">10500</td>
                                                <td>Barber Shop</td>
                                                <td>2019/20/02</td>
                                                <td style="color: red;">10000</td>
                                                <td>Computer Shop</td>
                                                <td>Buy Monitor</td>
                                                <td>Jason Gerona</td>
                                                <td>Rogelio Mangahas</td>
                                            </tr>
                                            <tr>
                                                <td>2019/05/03</td>
                                                <td style="color: rgb(68, 195, 238);">5000</td>
                                                <td>Computer Shop</td>
                                                <td>2019/15/03</td>
                                                <td style="color: red;">2000</td>
                                                <td>Salon And Spa</td>
                                                <td>Buy Shampoo</td>
                                                <td>Jason Gerona</td>
                                                <td>Rogelio Mangahas</td>
                                            </tr>
                                            <tr>
                                                <td>2019/08/04</td>
                                                <td style="color: rgb(68, 195, 238);">50000</td>
                                                <td>Barber Shop</td>
                                                <td>2019/10/04</td>
                                                <td style="color: red;">20000</td>
                                                <td>Computer Shop</td>
                                                <td>Buy Mouse</td>
                                                <td>Jason Gerona</td>
                                                <td>Rogelio Mangahas</td>
                                            </tr>
                                            <tr>
                                                <td>2019/22/05</td>
                                                <td style="color: rgb(68, 195, 238);">5000</td>
                                                <td>Vape Shop</td>
                                                <td>2019/23/05</td>
                                                <td style="color: red;">2000</td>
                                                <td>Barber Shop</td>
                                                <td>Buy Scissor</td>
                                                <td>Jason Gerona</td>
                                                <td>Rogelio Mangahas</td>
                                            </tr>
                                        </tbody>
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

    <!--For View Cash History-->
    <div class="modal fade none-border" id="transHistory">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><strong>Cash In</strong></h4>
                </div>
                <div class="modal-body">
                    <div>
                        <div class="row" id="histroyTable">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Transaction ID</th>
                                        <th>Transaction Date</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>012345</td>
                                        <td>2020/04/20</td>
                                        <td style="color: rgb(68, 195, 238);">15000</td>
                                    </tr>
                                </tbody>
                                </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End For View Cash History-->

     <!--For View Cash History-->
     <div class="modal fade none-border" id="transHistory1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><strong>Cash Out</strong></h4>
                </div>
                <div class="modal-body">
                    <div>
                        <div class="row" id="histroyTable">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <th>Transaction ID</th>
                                    <th>Transaction Date</th>
                                    <th>Amount</th>
                                </thead>
                                <tbody>
                                    <td>012345</td>
                                    <td>2020/04/20</td>
                                    <td style="color: red;">10000</td>
                                </tbody>
                                </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End For View Cash History-->
</body>
@endsection