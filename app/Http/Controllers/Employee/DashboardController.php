<?php

namespace App\Http\Controllers\Employee;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function home(){
        return view('employee.index');
    }

    public function profile(){
        return view('employee.profile')->with('employee',Auth::guard('employee')->user());
    }
}
