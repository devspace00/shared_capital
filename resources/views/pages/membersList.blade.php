@extends('layouts.layout')

@section('content')
<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/membersProfile.css')}}">
    <title>Members</title>
</head>
<body>
    <div id="main-wrapper">
        <!--Content body start-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h3>Client List</h3>
                                {{-- <button class="btn btn-danger waves-effect waves-light save-category" style="background-color: rgb(68, 195, 238); border: none; position: relative; left: 845px; top: 15px"><a  href="{{ route('account') }}" style="text-decoration: none;color: white">Add Account</a></button> --}}
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration" id="cashInTable">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Full Name</th>
                                                <th>Gender</th>
                                                <th>Email Address</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($clientList as $cList)
                                            <tr>
                                                <td>{{$cList['client_id']}}</td>
                                                <td>{{$cList['fName'] . " " . $cList['mName'] . 
                                                " " . $cList['lName']}}</td>
                                                <td>{{$cList['gender']}}</td>
                                                <td>{{$cList['email']}}</td>
                                                <td>
                                                    <a href={{"edit/".$cList['client_id']}}>Edit</a>
                                                </td>
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
</body>
@endsection