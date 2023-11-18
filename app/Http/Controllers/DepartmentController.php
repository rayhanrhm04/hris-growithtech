<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DepartmentController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['departments'] = Department::all();
        return view('mst.department.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['departments'] = Department::all();
        return view('mst.department.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $model = new Department();

        $model->code = $request->code;
        $model->name = $request->name;
        $model->parent_code = $request->parent_code;
        $model->created_by = Auth::user()->id;

        $model->save();

        return redirect()->route('department.index');
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
        $data['departments'] = Department::all();
        $data['department'] = Department::find($id);
        return view('mst.department.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $model = Department::find($id);

        $model->code = $request->code;
        $model->name = $request->name;
        $model->parent_code = $request->parent_code;
        $model->updated_by = Auth::user()->id;

        $model->save();

        return redirect()->route('department.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = Department::find($id);
        $model->deleted_by = Auth::user()->id;

        $model->save();

        $model->delete();

        return redirect()->route('department.index');
    }
}
