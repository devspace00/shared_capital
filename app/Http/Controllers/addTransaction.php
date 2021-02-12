<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transactions;

class addTransaction extends Controller
{
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
