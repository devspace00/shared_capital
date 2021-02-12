@extends('layouts.layout')

@section('content')
<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/profile.css')}}">
    <title>Profile</title>
     <!--Add User-->
     <script>
        function addUser()
        {
             // get input values
            var idNum = document.getElementById('idNum').value;
            var uName = document.getElementById('uName').value;
            var Gender = document.getElementById('Gender').value;
            var eMailAdd = document.getElementById('eMailAdd').value;

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
              // add values to the cells
            cel1.innerHTML = idNum;
            cel2.innerHTML = uName;
            cel3.innerHTML = Gender;
            cel4.innerHTML = eMailAdd;
        }    
    </script>
</head>

<body>

    <!--Preloader start-->
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
                                <div style="border: 1px solid; border-radius: 5px; padding: 5px">
                                    <h1 class="card-title" style="cursor: pointer;">Profile</h1>
                                    
                                    <div style="padding-bottom: 10px;">
                                        <div class="profile">
                                            <img style="border: 2px solid; border-radius: 10%; padding: 5px;" src="image/user.png" width="130px" height="130px">
                                            <span style="position:relative; left: 10px; bottom: 20px;">ID Number : <input type="text" id="id" placeholder="ID" disabled></span>
                                            <span style="position:relative; right: 230px; top: 30px;">Username : <input type="text" id="uName" placeholder="Username" disabled></span>
                                            <span style="position:relative; right: 200px; top: 30px;">Email : <input type="text" id="status" placeholder="Status" disabled></span>
                                            <div class="div">
                                                <span style="position:relative; left: 405px; bottom: 100px"> Gender : <input type="text" id="gender" placeholder="Gender" disabled></span>
                                                <button data-toggle="modal" data-target="#viewProfile" class="btn btn-danger waves-effect waves-light save-category" style="background-color: rgb(68, 195, 238); border: none;">View Profile</button>
                                            </div>  
                                        </div>
                                    </div> 
                                </div>
                                <div class="table-responsive">
                                    {{-- <button class="btn btn-danger waves-effect waves-light save-category" style="background-color: rgb(68, 195, 238); border: none; position: relative; left: 845px; top: 15px" data-toggle="modal" data-target="#addAccount">Add Account</button> --}}
                                    <button class="btn btn-danger waves-effect waves-light save-category" style="background-color: rgb(68, 195, 238); border: none; position: relative; left: 845px; top: 15px"><a  href="{{ route('account') }}" style="text-decoration: none;color: white">Add Account</a></button>
                                    <table class="table table-striped table-bordered zero-configuration" id="profileTable" style="cursor:pointer;">
                                        <thead>
                                            <tr>
                                              <th>ID</th>
                                              <th>Username</th>
                                              <th>Gender</th>
                                              <th>Email Address</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <tr>
                                              <td>#123</td>
                                              <td>Jason Gerona</td>
                                              <td>Male</td>
                                              <td>j.gerona0326@gmail.com</button></td>
                                            </tr>
                                            <tr>
                                              <td>#1</td>
                                              <td>Daniel Padilla</td>
                                              <td>Male</td>
                                              <td>daniel123@gmail.com</td>
                                            </tr> 
                                            <tr>
                                              <td>#2</td>
                                              <td>Jamaica Del Rosario</td>
                                              <td>Female</td>
                                              <td>jamaica123@gmail.com</td>
                                            </tr>
                                            <tr>
                                              <td>#3</td>
                                              <td>Christine Sacdalan</td>
                                              <td>Female</td>
                                              <td>christine123@gmail.com</td>
                                            </tr> 
                                            <tr>
                                              <td>#4</td>
                                              <td>Abette Gumasing</td>
                                              <td>Male</td>
                                              <td>abette123@gmail.com</td>
                                            </tr>
                                            <tr>
                                              <td>#5</td>
                                              <td>Rick Jumuad</td>
                                              <td>Male</td>
                                              <td>rick123@gmail.com</td>
                                            </tr> 
                                            <tr>
                                              <td>#4</td>
                                              <td>Gilbert Ranoco</td>
                                              <td>Male</td>
                                              <td>gilbert123@gmail.com</td>
                                            </tr>
                                            <tr>
                                              <td>#5</td>
                                              <td>Jak Rupido</td>
                                              <td>Male</td>
                                              <td>jak123@gmail.com</td>
                                            </tr> 
                                            <tr>
                                              <td>#4</td>
                                              <td>Rona Remoga</td>
                                              <td>Female</td>
                                              <td>rona123@gmail.com</td>
                                            </tr>
                                            <tr>
                                              <td>#5</td>
                                              <td>Elaine Sosing</td>
                                              <td>Female</td>
                                              <td>elaine123@gmail.com</td>
                                            </tr> 
                                            <tr>
                                              <td>#6</td>
                                              <td>Romeo Sumbong</td>
                                              <td>Male</td>
                                              <td>romeo123@gmail.com</td>
                                            </tr>
                                            <tr>
                                              <td>#7</td>
                                              <td>Sandra Dy</td>
                                              <td>Female</td>
                                              <td>sandra123@gmail.com</td>
                                            </tr> 
                                            <tr>
                                              <td>#8</td>
                                              <td>Christian Bonayon</td>
                                              <td>Male</td>
                                              <td>christian123@gmail.com</td>
                                            </tr>
                                            <tr>
                                              <td>#9</td>
                                              <td>Aljane Evangelio</td>
                                              <td>Female</td>
                                              <td>aljane123@gmail.com</td>
                                            </tr> 
                                            <tr>
                                              <td>#10</td>
                                              <td>Rogelio Mangahas</td>
                                              <td>Male</td>
                                              <td>rogelio123@gmail.com</td>
                                            </tr>
                                          </tbody>
                                        </table>
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

    <!--Modal For View Profile-->
    <div class="modal fade none-border" id="viewProfile">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><strong>Profile</strong></h4>
                </div>
                <div class="modal-body">
                    <div>
                        <div>
                            <div style="text-align: center;">
                            <img class="image" src="image/user.png" width="100px" height="100px">
                            </div>
                            <div style="margin: 10px">
                                <label class="control-label">ID Number</label>
                                <input class="form-control form-white" value="#123" type="text" name="category-name" disabled autocomplete="off">
                            </div>
                            <div style="margin: 10px">
                                <label class="control-label">Email</label>
                                <input class="form-control form-white" value="j.gerona0326@gmail.com" type="text" name="category-name" disabled autocomplete="off">
                            </div>
                            <div style="margin: 10px">
                                <label class="control-label">Username</label>
                                <input class="form-control form-white" value="Jason Gerona" type="text" name="category-name" disabled autocomplete="off">
                            </div>
                            <div style="margin: 10px">
                                <label class="control-label">Address</label>
                                <input class="form-control form-white" value="#123 Paris, France" type="text" name="category-name" disabled autocomplete="off">
                            </div>
                            <div style="margin: 10px">
                                <label class="control-label">Gender</label>
                                <input class="form-control form-white" value="Male" type="text" name="category-name" disabled autocomplete="off">
                            </div>
                            <div style="margin: 10px">
                                <label class="control-label">Status</label>
                                <input class="form-control form-white" value="Active" type="text" name="category-name" disabled autocomplete="off">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button style="margin: 10px" type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!--End Of Modal-->

    {{-- <!--Modal For Add Account-->
    <div class="modal fade none-border" id="addAccount">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><strong>Add Account</strong></h4>
                </div>
                <div class="modal-body">
                    <div>
                        <form action="" method="POST">
                        @csrf
                        <div>
                            <div style="text-align: center;">
                            <img class="image" src="image/user.png" width="100px" height="100px">
                            </div>
                            <div style="margin: 10px">
                                <label class="control-label">ID Number</label>
                                <input class="form-control form-white" name="idNum" value="#ID" type="text" disabled autocomplete="off">
                            </div>
                            <div style="margin: 10px">
                                <label class="control-label">Email</label>
                                <input class="form-control form-white" name="email" placeholder="example@gmail.com" autocomplete="off">
                            </div>
                            <div style="margin: 10px">
                                <label class="control-label">Username</label>
                                <input class="form-control form-white" name="username" placeholder="Username" type="text" autocomplete="off">
                            </div>
                            <div style="margin: 10px">
                                <label class="control-label">Password</label>
                                <input class="form-control form-white" placeholder="**********" type="text" name="password" autocomplete="off">
                            </div>
                            <div style="margin: 10px">
                                <label class="control-label">Confirm Password</label>
                                <input class="form-control form-white" placeholder="**********" type="text"  autocomplete="off">
                            </div>
                            <div style="margin: 10px">
                                <label class="control-label">Address</label>
                                <input class="form-control form-white" placeholder="#" type="text" name="address" autocomplete="off">
                            </div>
                            <div style="margin: 10px">
                                <label class="control-label">Gender</label>
                                <input class="form-control form-white" id="Gender" type="text" list="datalist" name="gender" autocomplete="off">
                                <datalist id="datalist">
                                    <option value="Male">
                                    <option value="Female">
                                </datalist>
                            </div>
                            <div style="margin: 10px">
                                <label class="control-label">Age</label>
                                <input class="form-control form-white" placeholder="" type="text" name="age" autocomplete="off">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger waves-effect waves-light save-category"  style="background-color: dodgerblue; border: none;" onclick="addUser();">Add</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Of Modal--> --}}

    <!--Displaying Name in input tag-->
    <script>
        var table = document.getElementById('profileTable');
        for(var i = 1; i < table.rows.length; i++)
        {
            table.rows[i].onclick = function()
            {
                 document.getElementById("id").value = this.cells[0].innerHTML;
                 document.getElementById("uName").value = this.cells[1].innerHTML;
                 document.getElementById("gender").value = this.cells[2].innerHTML;
                 document.getElementById("status").value = this.cells[3].innerHTML;
            };
        }
    </script>

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