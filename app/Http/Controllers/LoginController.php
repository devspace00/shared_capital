<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Validator;

class LoginController extends Controller
{
    function login(Request $request)
    {
        $this->validate($request, [
        'username'   => 'required',
        'password'  => 'required|alphaNum|min:3'
        ]);

        $user_data = array(
        'username'  => $request->get('username'),
        'password' => $request->get('password')
        );

        $user = User::where([["username", "=", $user_data['username']],["password", "=", $user_data['password']]])
        ->first();
        if(!$user) 
        {
            return redirect()->back()->with('error', 'Incorrect username or password');   
        }

        $user = User::find($user->id);
        Auth::login($user);

        if($user->type == "admin")
        {
            session(['username' => $user->username]);
            return redirect('Transaction_History');
        }

        session(['username' => $user->username]);
        return redirect('employeeLayout');
    }
}
