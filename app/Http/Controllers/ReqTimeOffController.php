<?php

namespace App\Http\Controllers;

<<<<<<< HEAD:app/Http/Controllers/ReimbursementController.php
use App\Models\Employee;
use App\Models\Position;
use App\Models\Reimbursement;
use Illuminate\Http\Request;
=======
>>>>>>> 6b391ebb2607b9ec2f953a5434c0cd0060eb192f:app/Http/Controllers/ReqTimeOffController.php

use App\Models\Employee;
use App\Models\Position;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ReqTimeOffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['req_time_offs'] = ReqTimeOff::all();
        return view('mst.requestTimeOff.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
<<<<<<< HEAD:app/Http/Controllers/ReimbursementController.php
        $data['employees'] = Employee::all();
        $data['positions'] = Position::all();

        return view('mst.reimbursement.create', $data);
=======
        $data['req_time_offs'] = ReqTimeOff::all();
        $data['employees'] = Employee::all();
        $data['positions'] = Position::all();

        return view('mst.requestTimeOff.index', $data);
>>>>>>> 6b391ebb2607b9ec2f953a5434c0cd0060eb192f:app/Http/Controllers/ReqTimeOffController.php
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $model = new ReqTimeOff();

        $model->name = $request->name;
        $model->position = $request->position;
        $model->type = $request->type;  
        $model->reason = $request->reason;  

        $model->save();
        return view('mst.requestTimeOff.index');
        return redirect('mst.requestTimeOff.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
