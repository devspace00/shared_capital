<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\clientaccount;
use Illuminate\Http\Request;

class userAuth extends Controller
{
    function userLogin(Request $req){
        $req->validate([
            'username' => 'required | alphaNum | max:15',
            'password' => 'required | alphaNum | min:4'
        ]);

        $user_data = $req->input();
        if($user_data['username'] == 'admin' && $user_data['password'] == '1234'){
            $req->session()->put('username', $user_data['username']);
            return redirect('Transaction_History');
        }
        elseif($user_data['username'] == 'employee' && $user_data['password'] == '1234'){
            $req->session()->put('username', $user_data['username']);
            return redirect('employeeLayout');
        }
        else{
            return redirect('/');
        }
    }
}
