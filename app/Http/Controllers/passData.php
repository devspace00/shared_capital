<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\members_accs;
use App\Models\transactions;

class passData extends Controller
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

    function addTransaction(Request $req){
        $trans = new transactions;
        $trans->id=$req->id;
        $trans->trans_id=$req->trans_id;
        $trans->fullName=$req->fullName;
        $trans->amount=$req->amount;
        $trans->created_at=$req->date;
        $trans->transaction_type=$req->transaction_type;
        $trans->save();
        return 'Data Save';    
    }
}
