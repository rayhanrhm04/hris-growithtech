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

Route::get('/dashboard-eksekutif', function () {
    return view('eksekutif.dashboard-eksekutif');
});

//dev
Route::get('/dashboard-managerdev', function () {
    return view('dep-dev.dashboard-managerdev');
});

Route::get('/dashboard-staffdev', function () {
    return view('dep-dev.dashboard-staffdev');
});

//hr
Route::get('/dashboard-managerhr', function () {
    return view('dep-hr.dashboard-managerhr');
});

Route::get('/profile-managerhr', function () {
    return view('dep-hr.profile-managerhr');
});

Route::get('/dashboard-staffhr', function () {
    return view('dep-hr.dashboard-staffhr');
});