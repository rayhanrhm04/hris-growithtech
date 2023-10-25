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
Route::view('/eksekutif/tambahPegawaiProject','eksekutif.tambahPegawaiProject');


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




Route::get('/tambahpegawaiproject-managerdev', function () {
    return view('dep-dev.manager.tambahpegawaiproject');
});
Route::get('/tabelpengajuancuti-managerdev', function () {
    return view('dep-dev.manager.tabelpengajuancuti');
});
Route::get('/pengajuancuti-managerdev', function () {
    return view('dep-dev.manager.pengajuancuti');
});
Route::get('/tabelpengajuanreimbursement-managerdev', function () {
    return view('dep-dev.manager.tabelpengajuanreimbursement');
});
Route::get('/reporting-managerdev', function () {
    return view('dep-dev.manager.reporting');
});
Route::get('/profile-managerdev', function () {
    return view('dep-dev.manager.profile');
});


//Staff Development
Route::get('/kehadiran-staffdev', function () {
    return view('dep-dev.staff.kehadiran');
});
Route::get('/project-staffdev', function () {
    return view('dep-dev.staff.project');
});
Route::get('/pengajuanizin-staffdev', function () {
    return view('dep-dev.staff.pengajuanizin');
});
Route::get('/pengajuanreimbursement-staffdev', function () {
    return view('dep-dev.staff.pengajuanreimbursement');
});
Route::get('/profile-staffdev', function () {
    return view('dep-dev.staff.profile');
});


Route::view('/staffdev/project','dep-dev.staff.project');
Route::get('/projectstaff', [ProjectController::class,'project'])->name('project');


//Manager HR
Route::get('/dashboard-managerhr', function () {
    return view('dep-hr.manager.dashboard-managerhr');
});
Route::get('/datapegawai-managerhr', function () {
    return view('dep-hr.manager.datapegawai');
});
Route::get('/tambahpegawai-managerhr', function () {
    return view('dep-hr.manager.tambahpegawai');
});
Route::get('/kehadiran-managerhr', function () {
    return view('dep-hr.manager.kehadiran');
});
Route::get('/tabelpengajuanizin-managerhr', function () {
    return view('dep-hr.manager.tabelpengajuanizin');
});
Route::get('/pengajuanizin-managerhr', function () {
    return view('dep-hr.manager.pengajuanizin');
});
Route::get('/tabelpengajuanreimbursement-managerhr', function () {
    return view('dep-hr.manager.tabelpengajuanreimbursement');
});
Route::get('/pengajuanreimbursement-managerhr', function () {
    return view('dep-hr.manager.pengajuanreimbursement');
});
Route::get('/penggajian-managerhr', function () {
    return view('dep-hr.manager.penggajian');
});
Route::get('/reporting-managerhr', function () {
    return view('dep-hr.manager.reporting');
});
Route::get('/profile-managerhr', function () {
    return view('dep-hr.manager.profile');
});

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