<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\clientaccount;
use App\Models\transaction;
use Illuminate\Support\Facades\DB;

use function Ramsey\Uuid\v1;

class mainController extends Controller
{
    //Registration
    public function addClient(Request $req)
    {
        $fName = $req->input('fName');
        $mName = $req->input('mName');
        $lName = $req->input('lName');
        $email = $req->input('email');
        $username = $req->input('username');
        $password = $req->input('password');
        $address = $req->input('address');
        $gender = $req->input('gender');
        $age = $req->input('age');
        $investment = $req->input('investment'); 

        DB::insert('insert into clientaccounts(fName,mName,lName,email,username,password,address,gender,age,investment) values(?,?,?,?,?,?,?,?,?,?)', [$fName, $mName, $lName, $email, $username, $password, $address, $gender, $age, $investment]);

        return redirect()->back()->with('message', 'Register Successfully!');
    }

    //Show data in table
    function clientHistory(){
        $data = clientaccount::all();
        return view('pages.membersHistory', ['clientUser'=>$data]);
    }
    function clientList(){
        $data = clientaccount::all();
        return view('pages.membersList', ['clientList'=>$data]);
    }
    function transactionList(){
        $data = transaction::all();
        return view('pages.transHistory', ['transData'=>$data]);
    }

    //Edit
    function showData($client_id){
        $client =  DB::select('select * from clientaccounts where id = ?', [$client_id]);
        return view('edit', ['client'=>$client]);
    }
    // function edit($client_id){
    //     $client =  DB::select('select * from clientaccounts where id = ?', [$client_id]);
    //     //message
    //     // $req->session()->flash('message', 'Updated  Successfully!');
    //     return redirect('profile', ['clientaccounts'=>$client]);
    // }

    //join databasee table
    function joinDBtable(){
        $data = DB::table('clientaccounts')
        ->select('clientaccounts.fName')
        ->join('transactions', 'clientaccounts.client_id', 'transactions.client_id')
        ->get();
        echo '<pre>';
        print_r($data);
    }
}
