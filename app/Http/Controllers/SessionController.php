<?php

namespace App\Http\Controllers;

use GuzzleHttp\Exception\TooManyRedirectsException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    //
    function index(){
        return view('login');
    }

    function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ],[
            'email.required' => 'Email Wajib Diisi',
            'password.required' => 'Password Wajib Diisi'
        ]);

        $infologin = [
            'email'=>$request->email,
            'password'=>$request->password
        ];

        if(Auth::attempt($infologin)){
            if(Auth::user()->role == 'managerhr'){
                return redirect('admin/managerhr');
            }elseif(Auth::user()->role == 'staffhr'){
                return redirect('admin/staffhrhr');
            }elseif(Auth::user()->role == 'managerdev'){
                return redirect('admin/managerdev');
            }elseif(Auth::user()->role == 'staffdev'){
                return redirect('admin/staffdev');
            }elseif(Auth::user()->role == 'eksekutif'){
                return redirect('admin/eksekutif');
            }
        }else{
            return redirect('')->withErrors('Email dan Password yang dimasukan tidak sesuai')->withInput();
        }

    }

    function logout(){
        Auth::logout();
        return redirect('');
    }
}


