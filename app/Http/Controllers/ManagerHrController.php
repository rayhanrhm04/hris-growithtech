<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;

use Database\Seeders\PegawaiSeeder;

class ManagerHrController extends Controller
{
    public function tampildata(){
        $pegawai = PegawaiSeeder::all();
        return view('dep-hr.manager.dataPegawai', compact('pegawai'));
    }

    public function create(){
        //
    }

    public function store(Request $request){
        //
    }

    public function show($id){
        //
    }

    public function update(Request $request, $id){
        //
    }

    public function destroy($id){
        //
    }
}
