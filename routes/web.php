<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\mainController;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\addData;
// use App\Http\Controllers\addMember;
// use App\Http\Controllers\members_table;
use App\Http\Controllers\passData;
use App\Http\Controllers\userAuth;
use App\Http\Controllers\webPages;
use Illuminate\Auth\Events\Login;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::post('index', [LoginController::class, 'login']);


Route::get('membersProfile', function(){
    return view('pages.membersProfile');
});
// Route::get('adminLayout', function(){
//     return view('layouts.adminLayout');
// });

//Join Table
Route::get('join', [mainController::class, 'joinDBtable']);

//Passing Data
Route::get('Account', [mainController::class, 'account']);
Route::post('Account', [mainController::class, 'addClient']);
Route::get('Members_History', [mainController::class, 'clientHistory']);
Route::get('Members_List', [mainController::class, 'clientList']);
Route::get('Transaction_History', [mainController::class, 'transactionList'])->middleware('auth');
Route::post('Transactions', [passData::class, 'addTransaction']);
// Route::get('edit/{client_id}', [mainController::class, 'showData']);
// Route::post('edit', [mainController::class, 'update']);
// Route::post('index', [login::class, 'checklogin']);

Route::get('/index', function () {
    if(session()->has('username')){
       return redirect('Transaction_History');
    }
    return view('/index');
});
Route::get('/logout', function () {
    if(session()->has('username')){
        session()->pull('username');
    }
    return redirect('/');
});

//Routing
Route::get('/', [
    'as' => 'index',
    'uses' => 'App\Http\Controllers\webPages@getIndex']);
Route::get('Transactions', [
    'as' => 'transactions',
    'uses' => 'App\Http\Controllers\webPages@getTransactions']);
Route::get('Members_Contribution', [
    'as' => 'membersContri',
    'uses' => 'App\Http\Controllers\webPages@getMembersContri']);
Route::get('Profile', [
    'as' => 'profile',
    'uses' => 'App\Http\Controllers\webPages@getProfile']);
Route::get('Account', [
    'as' => 'account',
    'uses' => 'App\Http\Controllers\webPages@getAccount']);
Route::get('Reports', [
    'as' => 'reports',
    'uses' => 'App\Http\Controllers\webPages@getReports']);
Route::get('Reports_History', [
    'as' => 'reportsHistory',
    'uses' => 'App\Http\Controllers\webPages@getReportsHistory']);
Route::get('Reports_Calendar', [
    'as' => 'reportsCalendar',
    'uses' => 'App\Http\Controllers\webPages@getReportsCalendar']);
// Route::get('Transaction_History', [
//     'as' => 'transHistory',
//     'uses' => 'App\Http\Controllers\webPages@getTransHistory']);
// Route::get('Members_List', [
//     'as' => 'membersList',
//     'uses' => 'App\Http\Controllers\webPages@getMembersList']);
Route::get('Members_Request', [
    'as' => 'membersRequest',
    'uses' => 'App\Http\Controllers\webPages@getMembersRequest']);
// Route::get('Members_History', [
//     'as' => 'membersHistory',
//     'uses' => 'App\Http\Controllers\webPages@getMembersHistory']);

