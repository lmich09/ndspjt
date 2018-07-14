<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * show the application dashboard.
     */
    public function index()
    {
        return view('dashboard');
    }

    /**
     * show user profile
     */
    public function showUserProfile()
    {
        return view('user.profile');
    }
}
