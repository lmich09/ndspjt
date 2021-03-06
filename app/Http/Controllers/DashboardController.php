<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lease;
use App\Certificate;
use App\User;
use App\Tax;
use App\LogActivity;

use Carbon\Carbon;
use DB;

class DashboardController extends Controller
{
    /**
     * show the application dashboard.
     */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {


    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function myTestAddToLog()
    {
        \LogActivity::addToLog('My Testing Add To Log.');
        dd('log insert successfully.');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    // 
    // public function logActivity()
    // {
    //     $logs = \LogActivity::logActivityLists();
    //     return view('logActivity',compact('logs'));
    // }


    public function logActivity()
    {
        // $logs = \LogActivity::logActivityLists();
        // $logs = Lease::orderBy('end', 'Desc')->paginate(4);
        $logs = LogActivity::orderBy('created_at', 'Desc')->paginate(10);


        return view('user.logtoday',compact('logs'));
    }

    public function datedue(){
        // $orders_this_month = Lease::where( DB::raw('MONTH(end)'), '=', date('n') )->get();
        // $orders_this_month = Lease::where('end', '>=', Carbon::now()->startOfMonth())->get();


        return view('lease.duedate.index', compact('orders_this_month'));
    }

    
    public function index()
    {
        return view('dashboard');
    }

    // public function log()
    // {
    //     $users = User::all();
    //     return view('user.logtoday', compact('users'));
    // }





    /**
     * show user profile
     */
    public function showUserProfile()
    {
        return view('user.profile');
    }
}
