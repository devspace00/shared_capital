@extends('layouts.layout')

@section('content')
<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/transactions.css')}}">
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
                                        <input type="image" src="image/Deposit.webp" width="80px" height="80px" data-toggle="modal" data-target="#add-category">
                                        <h1 class="card-title" data-toggle="modal" data-target="#add-category" style="cursor: pointer;">Transaction Request</h1>
                                    </div> 
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered" id="cashInTable" style="margin-top:80px">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Transaction ID</th>
                                                <th>Full Name</th>
                                                <th>Amount</th>
                                                <th>Date</th>
                                                <th>Transaction Type</th>
                                                <th>Requested By</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                              <td>#123</td>
                                              <td>#111</td>
                                              <td>Jason Gerona</td>
                                              <td>5000</td>
                                              <td>2011/04/25</td>
                                              <td>Cash In</td>
                                              <td>Jason Gerona</td>
                                            </tr>
                                            <tr>
                                              <td>#112</td>
                                              <td>#211</td>
                                              <td>Aljane Evangelio</td>
                                              <td>2500</td>
                                              <td>2011/04/25</td>
                                              <td>Cash In</td>
                                              <td>Jason Gerona</td>
                                            </tr>
                                            <tr>
                                              <td>#214</td>
                                              <td>#311</td>
                                              <td>Rogelio Mangahas</td>
                                              <td>7000</td>
                                              <td>2011/04/25</td>
                                              <td>Cash In</td>
                                              <td>Jason Gerona</td>
                                            </tr>
                                            <tr>
                                              <td>#265</td>
                                              <td>#411</td>
                                              <td>Kevin Baltazar</td>
                                              <td>200</td>
                                              <td>2011/04/25</td>
                                              <td>Cash In</td>
                                              <td>Jason Gerona</td>
                                            </tr>
                                            <tr>
                                              <td>#731</td>
                                              <td>#511</td>
                                              <td>Francis Macalintal</td>
                                              <td>500</td>
                                              <td>2011/04/25</td>
                                              <td>Cash In</td>
                                              <td>Jason Gerona</td>
                                            </tr>
                                            <tr>
                                              <td>#123</td>
                                              <td>#133</td>
                                              <td>Jason Gerona</td>
                                              <td>5000</td>
                                              <td>2011/04/25</td>
                                              <td>Cash In</td>
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

    <!--Modal For Cash In-->
    <div class="modal fade none-border" id="add-category">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><strong>Add a Transaction</strong></h4>
                </div>
                <div class="modal-body">
                    <div>
                        <form action="" method="POST">
                        @csrf
                        <div class="row" style="padding: 10px 15px">
                            {{-- <div class="col-md-6">
                                <label class="control-label">ID</label>
                                <input class="form-control form-white" name="id" value="1" type="text" autocomplete="off">
                            </div>
                            <div class="col-md-6">
                                <label class="control-label">Transaction ID</label>
                                <input class="form-control form-white" name="trans_id" placeholder="Transaction ID" disabled autocomplete="off">
                            </div> --}}
                            <div class="col-md-6">
                                <label class="control-label">Full Name</label>
                                <input class="form-control form-white" name="fullName" placeholder="Full Name" type="text" list="datalist" autocomplete="off">
                                <datalist id="datalist">
                                    <option value="Jason Gerona">
                                    <option value="Rogelio Mangahas">
                                    <option value="Gilbert Ranoco">
                                    <option value="Aljane Evangelio">
                                </datalist>
                            </div>
                            <div class="col-md-6">
                                <label class="control-label">Amount</label>
                                <input class="form-control form-white" name="amount" value="100" placeholder="Amount" type="text"  autocomplete="off">
                            </div>
                            {{-- <div class="col-md-6">
                                <label class="control-label">Date</label>
                                <div class="form-control form-white" name="date" disable></div>
                            </div> --}}
                            <div class="col-md-6">
                                <label class="control-label">Transaction Type</label>
                                <input class="form-control form-white" name="transaction_type" list="trans_list" type="text">
                                <datalist id="trans_list">
                                    <option value="Cash In">
                                    <option value="Cash Out">
                                </datalist>
                            </div>
                            <div class="col-md-6">
                                <label class="control-label">Request By</label>
                                <input class="form-control form-white" value="{{session('username')}}" type="text"  autocomplete="off">
                            </div>
                            <div class="modal-footer" style="margin-left: auto">
                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger waves-effect waves-light save-category"  style="background-color: dodgerblue; border: none;" onclick="addRow();">Add</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    <!--End Of Modal-->
</body>
@endsection