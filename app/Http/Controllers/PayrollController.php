<?php

namespace App\Http\Controllers;

use App\Models\Payroll;
use App\Models\Department;
use App\Models\Position;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class PayrollController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['payrolls'] = Payroll::all();
        return view('mst.payroll.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['users'] = User::all();
        $data['departments'] = Department::where('empl_id','=',$users->id)->get();
        $data['positions'] = Position::all();

        return view('mst.payroll.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $model = new Payroll();

        $model->empl_id = $request->empl_id;
        $model->department_id = $request->department_id;
        $model->position_id = $request->position_id;
        $model->meal_allowances = $request->meal_allowances;
        $model->project_bonus = $request->project_bonus;
        $model->reimbursement_id = $request->reimbursement_id;
        $model->basic_salary = $request->basic_salary;
        $model->salary_cuts = $request->salary_cuts;
        $model->total_salary = $request->total_salary;
        $model->created_by = Auth::user()->id;
        
        $model->save();
        
        return redirect()->route('payroll.index');
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