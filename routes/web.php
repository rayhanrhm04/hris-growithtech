<?php


use App\Http\Controllers\ManagerHrController;
use App\Http\Controllers\EksekutifController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::post('/authenticate', [LoginController::class,'authenticate'])->name('authenticate');

Route::middleware(['guest'])->group(function () {
    Route::get('/', [SessionController::class, 'index'])->name('login');
    Route::post('/', [SessionController::class, 'login']);
});
Route::get('/home', function(){
    return redirect('/admin');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/logout', [SessionController::class, 'logout'])->name('logout');
    Route::get('/admin/eksekutif', [AdminController::class, 'eksekutif'])->middleware('userAkses:eksekutif');
    Route::get('/admin/managerhr', [AdminController::class, 'managerhr'])->middleware('userAkses:managerhr');
    Route::get('/admin/staffhr', [AdminController::class, 'staffhr'])->middleware('userAkses:staffhr');
    Route::get('/admin/managerdev', [AdminController::class, 'managerhr'])->middleware('userAkses:managerdev');
    Route::get('/admin/staffdev', [AdminController::class, 'staffhr'])->middleware('userAkses:managerdev');

    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard.dashboard');
    Route::resource('department', DepartmentController::class);
    
    Route::get('/employee', [EmployeeController::class, 'index'])->name('employee.index');
    Route::get('/employee/create', [EmployeeController::class, 'create'])->name('employee.create');
    Route::post('/employee/store', [EmployeeController::class, 'store'])->name('employee.store');
    Route::post('/employee/edit', [EmployeeController::class, 'edit'])->name('employee.edit');
    Route::post('/employee/destroy', [EmployeeController::class, 'destroy'])->name('employee.destroy');
    
    Route::get('/project', [ProjectController::class, 'index'])->name('project.index');
    Route::get('/project/create', [ProjectController::class, 'create'])->name('project.create');
    Route::post('/project/store', [ProjectController::class, 'store'])->name('project.store');

});


Route::resource('department', DepartmentController::class);
// Route::get('/', function () {
//     return view('login');
// });


//Eksekutif
// Route::get('/eksekutif/dashboard-eksekutif', function () {
//     return view('eksekutif.dashboard-eksekutif');
// });
Route::get('/eksekutif/dashboard', function () {
    return view('dashboard');
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


//Manager HR
Route::view('/manager-hr/dashboard-managerhr','dep-hr.manager.dashboard-managerhr');
//Route::view('/manager-hr/dataPegawai','dep-hr.manager.dataPegawai');
//Route::get('/manager-hr/dataPegawai', [ManagerHrController::class, 'tampildata']);

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

//route pegawai
// Route::resource('pegawai', ManagerHrController::class);

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


Route::get('/tes', [DashboardController::class, 'tes']);