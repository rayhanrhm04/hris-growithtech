<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes    
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
Route::get('/eksekutif/dashboard-eksekutif', function () {
    return view('eksekutif.dashboard-eksekutif');
});

Route::view('/eksekutif/kehadiran','eksekutif.kehadiran');
Route::view('/eksekutif/dataPegawai','eksekutif.dataPegawai');
Route::view('/eksekutif/project','eksekutif.project');
Route::view('/eksekutif/pengajuanCuti','eksekutif.pengajuanCuti');
Route::view('/eksekutif/pengajuanReimbursement','eksekutif.pengajuanReimbursement');
Route::view('/eksekutif/reporting','eksekutif.reporting');
Route::view('/eksekutif/profile','eksekutif.profile');
Route::view('/eksekutif/tambahPegawai','eksekutif.tambahPegawai');
Route::view('/eksekutif/tambahProject','eksekutif.tambahProject');
Route::view('/eksekutif/tambahPegawaiProject','eksekutif.tambahPegawaiProject'); //ini belum ada buttonnya


//Manager Development
Route::view('/manager-dev/dashboard-managerdev','dep-dev.manager.dashboard-managerdev');
Route::view('/manager-dev/kehadiran','dep-dev.manager.kehadiran');
Route::view('/manager-dev/project','dep-dev.manager.project');
Route::view('/manager-dev/tambahProject','dep-dev.manager.tambahProject');
Route::view('/manager-dev/tambahPegawaiProject','dep-dev.manager.tambahPegawaiProject'); //ini belum ada buttonnya
Route::view('/manager-dev/permintaanCuti','dep-dev.manager.permintaanCuti');
Route::view('/manager-dev/pengajuanCuti','dep-dev.manager.pengajuanCuti');
Route::view('/manager-dev/permintaanReimbursement','dep-dev.manager.permintaanReimbursement');
Route::view('/manager-dev/pengajuanReimbursement','dep-dev.manager.pengajuanReimbursement');
Route::view('/manager-dev/tambahpengajuanCuti','dep-dev.manager.tambahpengajuanCuti');
Route::view('/manager-dev/reporting','dep-dev.manager.reporting');
Route::view('/manager-dev/profile','dep-dev.manager.profile');


//Staff Development
Route::view('/staff-dev/kehadiran','dep-dev.staff.kehadiran');
Route::view('/staff-dev/project','dep-dev.staff.project');
Route::view('/staff-dev/pengajuanCuti','dep-dev.staff.pengajuanCuti');
Route::view('/staff-dev/pengajuanReimbursement','dep-dev.staff.pengajuanReimbursement');
Route::view('/staff-dev/profile','dep-dev.staff.profile');
Route::get('/projectstaff', [ProjectController::class,'project'])->name('project');


//Manager HR
Route::view('/manager-hr/dashboard-managerhr','dep-hr.manager.dashboard-managerhr');
Route::view('/manager-hr/dataPegawai','dep-hr.manager.dataPegawai');
Route::view('/manager-hr/tambahPegawai','dep-hr.manager.tambahPegawai');
Route::view('/manager-hr/kehadiran','dep-hr.manager.kehadiran');
Route::view('/manager-hr/permintaanCuti','dep-hr.manager.permintaanCuti');
Route::view('/manager-hr/pengajuanCuti','dep-hr.manager.pengajuanCuti');
Route::view('/manager-hr/pengajuanReimbursement','dep-hr.manager.pengajuanReimbursement');
Route::view('/manager-hr/tambahReimbursement','dep-hr.manager.tambahReimbursement');
Route::view('/manager-hr/permintaanReimbursement','dep-hr.manager.permintaanReimbursement');
Route::view('/manager-hr/penggajian','dep-hr.manager.penggajian');
Route::view('/manager-hr/reporting','dep-hr.manager.reporting');
Route::view('/manager-hr/profile','dep-hr.manager.profile');

//Staff HR
Route::get('/dashboard-staffhr', function () {
    return view('dep-hr.staff.dashboard-staffhr');
});
Route::get('/datapegawai-staffhr', function () {
    return view('dep-hr.staff.datapegawai');
});
Route::get('/kehadiran-staffhr', function () {
    return view('dep-hr.staff.kehadiran');
});
Route::get('/tambahpegawai-staffhr', function () {
    return view('dep-hr.staff.tambahpegawai');
});
Route::get('/pengajuanizin-staffhr', function () {
    return view('dep-hr.staff.pengajuanizin');
});
Route::get('/pengajuanreimbursement-staffhr', function () {
    return view('dep-hr.staff.pengajuanreimbursement');
});
Route::get('/penggajian-staffhr', function () {
    return view('dep-hr.staff.penggajian');
});
Route::get('/profile-staffhr', function () {
    return view('dep-hr.staff.profile');
});