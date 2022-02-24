<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function home(){
        return view('admin.index');
    }


    public function profile(){
        return view('admin.profile')->with('admin',Auth::guard('admin')->user());
    }
}
