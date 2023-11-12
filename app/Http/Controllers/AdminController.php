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
    function managerhr(){
        return view('dashboard');
    }
    function staffhr(){
        return view('dashboard');
    }
    function managerdev(){
        return view('dashboard');
    }
    function staffdev(){
        return view('dashboard');
    }
}
