<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use App\Models\Position;
use App\Models\Religion;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['employees'] = Employee::all();
        return view('mst.employee.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['employees'] = Employee::all();
        $data['departments'] = Department::all();
        $data['positions'] = Position::all();
        $data['religions'] = Religion::all();

        return view('mst.employee.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $model = new Employee();

        $model->empl_id = $request->empl_id;
        $model->name = $request->name;
        $model->gender = $request->gender;
        $model->dob = $request->dob;
        $model->pob = $request->pob;
        $model->department_id = $request->department_id;
        $model->position_id = $request->position_id;
        $model->religion_id = $request->religion_id;
        $model->address = $request->address;
        $model->phone = $request->phone;
        $model->email = $request->email;
        $model->password = Hash::make($request->password);
        $model->created_by = Auth::user()->id;
        
        $model->save();

        //$model2 = new User();
        //$model2->name = $request->name;
       // $model2->password = Hash::make($request->password);
        //$model2->save();


        return view('mst.employee.index', );
        
        return redirect()->route('employee.index');

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
        $data['employees'] = Employee::all();
        $data['employee'] = Employee::find($id);
        return view('mst.employee.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $model = Employee::find($id);

        $model->empl_id = $request->empl_id;
        $model->name = $request->name;
        $model->gender = $request->gender;
        $model->dob = $request->dob;
        $model->pob = $request->pob;
        $model->department_id = $request->department_id;
        $model->position_id = $request->position_id;
        $model->religion_id = $request->religion_id;
        $model->address = $request->address;
        $model->phone = $request->phone;
        $model->email = $request->email;
        $model->password = Hash::make($request->password);
        $model->updated_by = Auth::user()->id;

        $model->save();

        return redirect()->route('employee.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = Employee::find($id);
        $model->deleted_by = Auth::user()->id;

        $model->save();

        $model->delete();

        return redirect()->route('employee.index');
    }
}
