<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data;

class addData extends Controller
{
    //passing data
    function addData(Request $req){
        $test = new data;
        $test->name=$req->name;
        $test->age=$req->age;
        $test->username=$req->username;
        $test->save();
        return 'Data Pass';
    }
}
