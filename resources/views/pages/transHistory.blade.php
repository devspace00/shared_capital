@extends('layouts.layout')

@section('content')
<head>
    <link rel="stylesheet" type="text/css" href="{{asset('css/transHistory.css')}}">
    <title>Transaction</title>
    <!--Add Row for Cash In-->
    <script>
        function addRow()
        {
            // get input values
            var idNum = document.getElementById('idNum').value;
            var transactionId = document.getElementById('transactionId').value;
            var fullName = document.getElementById('fullName').value;
            var amount = document.getElementById('amount').value;
            var date = document.getElementById('date').value;
            var transactionType = document.getElementById('transactionType').value;

              // get the html table
              // 0 = the first table
              var table = document.getElementsByTagName('table')[0];
              
              // add new empty row to the table
              // 0 = in the top 
              // table.rows.length = the end
              // table.rows.length/2+1 = the center
              var newRow = table.insertRow(1);
              
              // add cells to the row
              var cel1 = newRow.insertCell(0);
              var cel2 = newRow.insertCell(1);
              var cel3 = newRow.insertCell(2);
              var cel4 = newRow.insertCell(3);
              var cel5 = newRow.insertCell(4);
              var cel6 = newRow.insertCell(5);
              // add values to the cells
              cel1.innerHTML = idNum;
              cel2.innerHTML = transactionId;
              cel3.innerHTML = fullName;
              cel4.innerHTML = amount;
              cel5.innerHTML = date;
              cel6.innerHTML = transactionType;
        }    
    </script>
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
                                        <h1 class="card-title">Transaction History</h1>    
                                    </div> 
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration" id="historyTable">
                                        <caption><strong>Year 2020</strong></caption>
                                        <thead>
                                            <tr>
                                                <th style="text-align: center;" colspan="5">Transaction History</th>
                                            </tr>
                                            <tr>
                                                <td>ID</td>
                                                <td>Transaction</td>
                                                <td>Amount</td>
                                                <td>Requested By</td>
                                                <td>Approved By</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($transData as $tData)
                                                <tr data-toggle="modal" data-target="#transHistory" style="cursor: pointer;">
                                                    <td>{{$tData['client_id']}}</td>
                                                    <td>{{$tData['trans_type']}}</td>
                                                    <td>{{$tData['amount']}}</td>
                                                    <td>{{session('username')}}</td>
                                                    <td>Approved By</td>
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
                                    @foreach ($transData as $tData)
                                    <tr>
                                        <td>{{$tData['transaction_id']}}</td>
                                        <td>{{$tData['created_at']}}</td>
                                        <td>{{$tData['amount']}}</td>
                                    </tr>
                                    @endforeach
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