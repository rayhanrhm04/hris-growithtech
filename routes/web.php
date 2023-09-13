<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes ngoding tes git doang
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login');
});

//Eksekutif
Route::get('/dashboard-eksekutif', function () {
    return view('eksekutif.dashboard-eksekutif');
});

Route::view('/kehadiran','eksekutif.kehadiran');
Route::view('/project','eksekutif.project');
Route::view('/dataPegawai','eksekutif.dataPegawai');
Route::view('/pengajuanCuti','eksekutif.pengajuanCuti');
Route::view('/pengajuanReimbursement','eksekutif.dataPegawai');


//Manager Development
Route::get('/dashboard-managerdev', function () {
    return view('dep-dev.dashboard-managerdev');
});


//Staff Development
Route::get('/dashboard-staffdev', function () {
    return view('dep-dev.dashboard-staffdev');
});


