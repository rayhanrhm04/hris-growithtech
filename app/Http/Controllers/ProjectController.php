<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use App\Models\Position;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data['pr'] = Project::all();
        return view('mst.project.index', $data);

     
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['employees'] = Employee::all();
        $data['projects'] = Project::all();
        $data['departments'] = Department::all();
        $data['positions'] = Position::all();

        return view('mst.project.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $model = new Project();
        $model->name = $request->name;
        $model->start_date = $request->start_date;
        $model->end_date = $request->end_date;
        $model->description = $request->description;
        $model->save();

        // return view('mst.project.index');

        return redirect()->route('project.index');
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
        $data['employees'] = Employee::all();
        $data['departments'] = Department::all();
        $data['positions'] = Position::all();
        $data['projects'] = Project::all();

        $data['employee'] = Employee::find($id);
        $data['department'] = Department::find($id);
        $data['position'] = Position::find($id);
        $data['project'] = Project::find($id);
        
        return view('mst.project.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $model = Project::find($id);

        $model->name = $request->name;
        $model->start_date = $request->start_date;
        $model->end_date = $request->end_date;
        $model->description = $request->description;
        // $model->updated_by = Auth::user()->id;

        $model->save();

        return redirect()->route('project.index');
        // dd($model);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $model = Project::find($id);
        $model->deleted_by = Auth::user()->id;

        $model->save();

        $model->delete();

        return redirect()->route('project.index');
    }
}
