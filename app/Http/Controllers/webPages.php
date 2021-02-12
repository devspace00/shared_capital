<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class webPages extends Controller
{
    public function getIndex(){
        return view('pages.index');
    }
    public function getTransactions(){
        return view('pages.transactions');
    }
    public function getTransHistory(){
        return view('pages.transHistory');
    }
    public function getMembersContri(){
        return view('pages.membersContri');
    }
    public function getReports(){
        return view('pages.reports');
    }   
    public function getReportsHistory(){
        return view('pages.reportsHistory');
    }
    public function getReportsCalendar(){
        return view('pages.reportsCalendar');
    }
    public function getProfile(){
        return view('pages.profile');
    }
    public function getAccount(){
        return view('pages.account');
    }
    public function getMembersList(){
        return view('pages.membersList');
    }
    public function getMembersRequest(){
        return view('pages.membersRequest');
    }
    // public function getMembersHistory(){
    //     return view('pages.membersHistory');
    // }
}
