<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Reimbursement;
use App\Models\Department;
use App\Models\Employee;
use App\Models\Position;
use App\Models\User;

class ReqreimbursementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['reimbursements'] = Reimbursement::all();
        return view('mst.reqreimbursement.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['reimbursements'] = Reimbursement::all();
        $data['users'] = User::all();
        $data['departments'] = Department::all();
        $data['positions'] = Position::all();

        return view('mst.reqreimbursement.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $model = new Reimbursement();

        $model->empl_id = $request->empl_id;
        $model->department_id = $request->department_id;
        $model->position_id = $request->position_id;
        $model->date = $request->date;
        $model->nominal = $request->nominal;
        $model->datafile = $request->datafile;
        $model->status = $request->status;
        $model->created_by = Auth::user()->id;
        
        $model->save();
        
        return redirect()->route('reqreimbursement.index');

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
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

    }
}

