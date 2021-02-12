@extends('layouts.layout')

@section('content')
<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/memberRequest.css')}}">
    <title>Members</title> 
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
                                        <input type="image" src="image/members.svg" width="80px" height="80px">
                                        <h1 class="card-title" style="cursor: pointer;">Client Request</h1>
                                    </div> 
                                </div>
                                <div style="text-align: end;">
                                    <button class="btn btn-danger waves-effect waves-light save-category" style="background-color: rgb(68, 195, 238); border: none; margin-top:10px;" id="back"><a  href="{{ route('account') }}" style="text-decoration: none;color: white">Add Account</a></button>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered" id="cashInTable" style="margin-top:50px">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Full Name</th>
                                                <th>Gender</th>
                                                <th>Email Address</th>
                                                <th>Request By</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>#123</td>
                                                <td>Jason Gerona</td>
                                                <td>Male</td>
                                                <td>j.gerona0326@gmail.com</button></td>
                                                <td>Rogelio Mangahas</td>
                                            </tr>
                                            <tr>
                                                <td>#2</td>
                                                <td>Jamaica Del Rosario</td>
                                                <td>Female</td>
                                                <td>jamaica123@gmail.com</td>
                                                <td>Rogelio Mangahas</td>
                                            </tr>
                                            <tr>
                                                <td>#3</td>
                                                <td>Christine Sacdalan</td>
                                                <td>Female</td>
                                                <td>christine123@gmail.com</td>
                                                <td>Rogelio Mangahas</td>
                                            </tr>
                                            <tr>
                                                <td>#4</td>
                                                <td>Abette Gumasing</td>
                                                <td>Male</td>
                                                <td>abette123@gmail.com</td>
                                                <td>Rogelio Mangahas</td>
                                            </tr>
                                            <tr>
                                                <td>#5</td>
                                                <td>Rick Jumuad</td>
                                                <td>Male</td>
                                                <td>rick123@gmail.com</td>
                                                <td>Rogelio Mangahas</td>
                                            </tr>
                                            <tr>
                                                <td>#4</td>
                                                <td>Gilbert Ranoco</td>
                                                <td>Male</td>
                                                <td>gilbert123@gmail.com</td>
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
                                <input class="form-control form-white" value="Jason Gerona" type="text"  autocomplete="off">
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