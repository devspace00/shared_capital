<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\members_accs;

class addMembers extends Controller
{
    function addMembers(Request $req){
        $members = new members_accs;
        $members->Fname=$req->fName;
        $members->Mname=$req->mName;
        $members->Lname=$req->lName;
        $members->email=$req->email;
        $members->username=$req->username;
        $members->password=$req->password;
        $members->address=$req->address;
        $members->gender=$req->gender;
        $members->age=$req->age;
        $members->investment=$req->investment;
        $members->save();
        return 'Data Pass';
        // return view('pages.profile');
    }
}
