<?php

use App\Http\Controllers\ProjectController;
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

Route::view('/eksekutif/kehadiran','eksekutif.kehadiran');
Route::view('/eksekutif/project','eksekutif.project');
Route::view('/eksekutif/dataPegawai','eksekutif.dataPegawai');
Route::view('/eksekutif/pengajuanCuti','eksekutif.pengajuanCuti');
Route::view('/eksekutif/pengajuanReimbursement','eksekutif.pengajuanReimbursement');
Route::view('/eksekutif/reporting','eksekutif.reporting');



//Manager Development
Route::get('/dashboard-managerdev', function () {
    return view('dep-dev.dashboard-managerdev');
});


//Staff Development
Route::get('/dashboard-staffdev', function () {
    return view('dep-dev.staff.dashboard-staffdev');
});
Route::view('/staffdev/project','dep-dev.staff.project');
Route::get('/projectstaff', [ProjectController::class,'project'])->name('project');
Route::view('/staffdev/kehadiran','dep-dev.staff.kehadiran');

Route::get('/datapegawai', function () {
    return view('dep-hr.staff.datapegawai');
});




//Manager HR
Route::get('/dashboard-managerhr', function () {
    return view('dep-hr.manager.dashboard-managerhr');
});
Route::get('/datapegawai', function () {
    return view('dep-hr.manager.datapegawai');
});
Route::get('/tambahpegawai', function () {
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