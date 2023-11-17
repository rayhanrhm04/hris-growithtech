<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    function index(){
        return view('dashboard');
    }
    function eksekutif(){
        return view('eksekutif.dashboard-eksekutif');
    }
    function managerhr(){
        return view('dep-hr.manager.dashboard-managerhr');
    }
    function staffhr(){
        return view('dep-hr.staff.dashboard-staffhr');
    }
    function managerdev(){
        return view('dashboard');
    }
    function staffdev(){
        return view('dashboard');
    }
}
