@extends('layouts.layout')

@section('content')

<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/membersTable.css')}}">
    <title>Members Contribution</title>

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
                                        <input type="image" src="image/table.svg" width="80px" height="80px">
                                        <h1 class="card-title">Client Contribution</h1>    
                                    </div> 
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration" id="membersTable">
                                        <caption><strong>Year 2020</strong></caption>
                                        <thead>
                                            <tr>
                                                <th>Member Name</th>
                                                <th>JANUARY</th>
                                                <th>FEBRUARY</th>
                                                <th>MARACH</th>
                                                <th>APRIL</th>
                                                <th>MAY</th>
                                                <th>JUNE</th>
                                                <th>JULY</th>
                                                <th>AUGUST</th>
                                                <th>SEPTEMBER</th>
                                                <th>OCTOBER</th>
                                                <th>NOVEMBER</th>
                                                <th>DECEMBER</th>
                                                <th>TOTAL SHARE MONTH</th>
                                                <th>AVE. SHARE MONTH</th>
                                                <th>OIC(OIC*AS)</th>
                                                <th>DIVIDEND</th>
                                                <th>PATRONAGE</th>
                                                <th>DRAWING</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Jason Gerona</td>
                                                <td data-toggle="modal" data-target="#cashHistory" style="cursor: pointer;">1000</td>
                                                <td data-toggle="modal" data-target="#cashHistory" style="cursor: pointer;">1000</td>
                                                <td data-toggle="modal" data-target="#cashHistory" style="cursor: pointer;">1000</td>
                                                <td data-toggle="modal" data-target="#cashHistory" style="cursor: pointer;">1000</td>
                                                <td data-toggle="modal" data-target="#cashHistory" style="cursor: pointer;">1000</td>
                                                <td data-toggle="modal" data-target="#cashHistory" style="cursor: pointer;">1000</td>
                                                <td data-toggle="modal" data-target="#cashHistory" style="cursor: pointer;">1000</td>
                                                <td data-toggle="modal" data-target="#cashHistory" style="cursor: pointer;">1000</td>
                                                <td data-toggle="modal" data-target="#cashHistory" style="cursor: pointer;">1000</td>
                                                <td data-toggle="modal" data-target="#cashHistory" style="cursor: pointer;">1000</td>
                                                <td data-toggle="modal" data-target="#cashHistory" style="cursor: pointer;">1000</td>
                                                <td data-toggle="modal" data-target="#cashHistory" style="cursor: pointer;">1000</td>
                                                <td>12000</td>
                                                <td>1000</td>
                                                <td>1164.45</td>
                                                <td>test</td>
                                                <td>test</td>
                                                <td>2000</td>
                                            </tr>
                                            <tr>
                                            <td>Rogelio Mangahas</td>
                                            <td data-toggle="modal" data-target="#cashHistory1" style="cursor: pointer;"></td>
                                            <td data-toggle="modal" data-target="#cashHistory1" style="cursor: pointer;"></td>
                                            <td data-toggle="modal" data-target="#cashHistory1" style="cursor: pointer;"></td>
                                            <td data-toggle="modal" data-target="#cashHistory1" style="cursor: pointer;"></td>
                                            <td data-toggle="modal" data-target="#cashHistory1" style="cursor: pointer;"></td>
                                            <td data-toggle="modal" data-target="#cashHistory" style="cursor: pointer;">1000</td>
                                            <td data-toggle="modal" data-target="#cashHistory" style="cursor: pointer;">1000</td>
                                            <td data-toggle="modal" data-target="#cashHistory" style="cursor: pointer;">1000</td>
                                            <td data-toggle="modal" data-target="#cashHistory" style="cursor: pointer;">1000</td>
                                            <td data-toggle="modal" data-target="#cashHistory" style="cursor: pointer;">1000</td>
                                            <td data-toggle="modal" data-target="#cashHistory" style="cursor: pointer;">1000</td>
                                            <td data-toggle="modal" data-target="#cashHistory" style="cursor: pointer;">1000</td>
                                            <td>7000</td>
                                            <td>583</td>
                                            <td>678.87</td>
                                            <td>test</td>
                                            <td>test</td>
                                            <td>1000</td>
                                        </tr>
                                        <tr>
                                            <td>Aljane Evangelio</td>
                                            <td data-toggle="modal" data-target="#cashHistory1" style="cursor: pointer;"></td>
                                            <td data-toggle="modal" data-target="#cashHistory1" style="cursor: pointer;"></td>
                                            <td data-toggle="modal" data-target="#cashHistory1" style="cursor: pointer;"></td>
                                            <td data-toggle="modal" data-target="#cashHistory1" style="cursor: pointer;"></td>
                                            <td data-toggle="modal" data-target="#cashHistory1" style="cursor: pointer;"></td>
                                            <td data-toggle="modal" data-target="#cashHistory1" style="cursor: pointer;"></td>
                                            <td data-toggle="modal" data-target="#cashHistory1" style="cursor: pointer;"></td>
                                            <td data-toggle="modal" data-target="#cashHistory" style="cursor: pointer;">3000</td>
                                            <td data-toggle="modal" data-target="#cashHistory" style="cursor: pointer;">3000</td>
                                            <td data-toggle="modal" data-target="#cashHistory" style="cursor: pointer;">3000</td>
                                            <td data-toggle="modal" data-target="#cashHistory" style="cursor: pointer;">3000</td>
                                            <td data-toggle="modal" data-target="#cashHistory" style="cursor: pointer;">3000</td>
                                            <td>15000</td>
                                            <td>1250</td>
                                            <td>1455.56</td>
                                            <td>test</td>
                                            <td>test</td>
                                            <td>1500</td>
                                        </tr>
                                        <tr>
                                        <td>Jak Rupido</td>
                                        <td data-toggle="modal" data-target="#cashHistory" style="cursor: pointer;">1000</td>
                                        <td data-toggle="modal" data-target="#cashHistory" style="cursor: pointer;">1000</td>
                                        <td data-toggle="modal" data-target="#cashHistory" style="cursor: pointer;">1000</td>
                                        <td data-toggle="modal" data-target="#cashHistory" style="cursor: pointer;">1000</td>
                                        <td data-toggle="modal" data-target="#cashHistory" style="cursor: pointer;">1000</td>
                                        <td data-toggle="modal" data-target="#cashHistory" style="cursor: pointer;">1500</td>
                                        <td data-toggle="modal" data-target="#cashHistory" style="cursor: pointer;">1500</td>
                                        <td data-toggle="modal" data-target="#cashHistory" style="cursor: pointer;">1500</td>
                                        <td data-toggle="modal" data-target="#cashHistory" style="cursor: pointer;">1500</td>
                                        <td data-toggle="modal" data-target="#cashHistory" style="cursor: pointer;">1500</td>
                                        <td data-toggle="modal" data-target="#cashHistory" style="cursor: pointer;">2000</td>
                                        <td data-toggle="modal" data-target="#cashHistory" style="cursor: pointer;">2000</td>
                                        <td>16500</td>
                                        <td>1375</td>
                                        <td>1601.11</td>
                                        <td>test</td>
                                        <td>test</td>
                                        <td>500</td>
                                    </tr>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <td>TOTAL</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>50500</td>
                                            <td>*4208</td>
                                            <td>4899.99</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        </tfoot>
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
    <div class="modal fade none-border" id="cashHistory">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><strong>History</strong></h4>
                </div>
                <div class="modal-body">
                    <div>
                        <div class="row" id="histroyTable">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                    <th>Cash In</th>
                                    <th>Cash Out</th>
                                    <th>Current Money</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <td>500<br>2019/01/01</td>
                                    <td></td>
                                    <td>500</td>
                                    </tr>
                                    <tr>
                                    <td>500<br>2019/15/01</td>
                                    <td></td>
                                    <td>1000</td>
                                    </tr>
                                </tbody>
                                </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal" style="background-color: dodgerblue; border: none;" onclick="printContent('histroyTable')">Print</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End For View Cash History-->

     <!--For View Cash History-->
     <div class="modal fade none-border" id="cashHistory1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><strong>History</strong></h4>
                </div>
                <div class="modal-body">
                    <div>
                        <div class="row" id="histroyTable">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                    <th>Cash In</th>
                                    <th>Cash Out</th>
                                    <th>Current Money</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    </tr>
                                    <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    </tr>
                                </tbody>
                                </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal" style="background-color: dodgerblue; border: none;" onclick="printContent('histroyTable')">Print</button>
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