@extends('layouts.layout')

@section('content')
<head>
    <link rel="stylesheet" type="text/css" href="{{asset('css/reports.css')}}">
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
                                <div>
                                    <div style="text-align: center;">
                                        <div style="padding-top: 20px">
                                        <input type="image" src="image/report.svg" width="80px" height="80px" data-toggle="modal" data-target="#add-category">
                                        <h1 class="card-title" data-toggle="modal" data-target="#add-category" style="cursor: pointer; margin-right:15px">Business Reports Request</h1>
                                        </div>
                                    </div> 
                                </div>
                                <div class="table-responsive" style="padding-top: 80px">
                                    <table class="table header-border" id="reports">
                                        <thead>
                                            <tr>
                                                <th colspan="3" style="text-align: center; border-right: 1px solid rgb(221, 219, 219);"><strong>REVENUE</strong></th>
                                                <th colspan="5" style="text-align: center;"><strong>EXPENSES</strong></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Date</td>
                                                <td>Amount</td>
                                                <td>Business Line</td>
                                                <td>Date</td>
                                                <td>Amount</td>
                                                <td>Business Line</td>
                                                <td>Reason</td>
                                                <td>Requested By</td>
                                            </tr>
                                            <tr>
                                                <td>2019/20/01</td>
                                                <td>10000</td>
                                                <td>Barber Shop</td>
                                                <td>2019/25/01</td>
                                                <td>5000</td>
                                                <td>Vape Shop</td>
                                                <td>Buy Juice</td> 
                                                <td>Jason Gerona</td>
                                            </tr>
                                            <tr>
                                                <td>2019/10/02</td>
                                                <td>10500</td>
                                                <td>Barber Shop</td>
                                                <td>2019/20/02</td>
                                                <td>10000</td>
                                                <td>Computer Shop</td>
                                                <td>Buy Monitor</td>
                                                <td>Jason Gerona</td>
                                            </tr>
                                            <tr>
                                                <td>2019/05/03</td>
                                                <td>5000</td>
                                                <td>Computer Shop</td>
                                                <td>2019/15/03</td>
                                                <td>2000</td>
                                                <td>Salon And Spa</td>
                                                <td>Buy Shampoo</td>
                                                <td>Jason Gerona</td>
                                            </tr>
                                            <tr>
                                                <td>2019/08/04</td>
                                                <td>50000</td>
                                                <td>Barber Shop</td>
                                                <td>2019/10/04</td>
                                                <td>20000</td>
                                                <td>Computer Shop</td>
                                                <td>Buy Mouse</td>
                                                <td>Jason Gerona</td>
                                            </tr>
                                            <tr>
                                                <td>2019/22/05</td>
                                                <td>5000</td>
                                                <td>Vape Shop</td>
                                                <td>2019/23/05</td>
                                                <td>2000</td>
                                                <td>Barber Shop</td>
                                                <td>Buy Scissor</td>
                                                <td>Jason Gerona</td>
                                            </tr>
                                            <tr>
                                                <td>2019/01/06</td>
                                                <td>30000</td>
                                                <td>Barber Shop</td>
                                                <td>2019/06/06</td>
                                                <td>10000</td>
                                                <td>Vape Shop</td>
                                                <td>Buy Coil</td>
                                                <td>Jason Gerona</td>
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

    <!--Modal For Add Reports-->
    <div class="modal fade none-border" id="add-category">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><strong>Add a Transaction</strong></h4>
                </div>
                <div class="modal-body">
                    <div>
                        <div class="row">
                            <div class="col-md-6">
                                <p class="control-label">DAILY REVENUE</p>
                                <label class="control-label">Amount</label>
                                <input class="form-control form-white" placeholder="Amount" type="text" name="category-name" autocomplete="off">
                                <label class="control-label">Business Line</label>
                                <input class="form-control form-white" placeholder="Business Line" type="text" name="category-name" autocomplete="off">
                            </div>
                            <div class="col-md-6">
                                <p class="control-label">EXPENSES</p>
                                <label class="control-label">Amount</label>
                                <input class="form-control form-white" placeholder="Amount" type="text" name="category-name" autocomplete="off">
                                <label class="control-label">Business Line</label>
                                <input class="form-control form-white" placeholder="Business Line" type="text" name="category-name" autocomplete="off">
                                <label class="control-label">Reason</label>
                                <input class="form-control form-white" placeholder="Reason" type="text" name="category-name" autocomplete="off">
                                <label class="control-label">Request By</label>
                                <input class="form-control form-white" placeholder="Request By" type="text" name="category-name" value="{{session('username')}}" autocomplete="off">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal" style="background-color: dodgerblue; border: none;" onclick="addRow();">Add</button>
                </div>
            </div>
        </div>
    </div>
    <!--End Of Modal-->

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