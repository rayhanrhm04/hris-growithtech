<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use App\Models\Position;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data['projects'] = Project::all();
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

        return view('mst.project.index');
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
