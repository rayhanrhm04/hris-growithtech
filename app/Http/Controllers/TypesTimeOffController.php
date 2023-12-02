<?php

namespace App\Http\Controllers;


use App\Models\Employee;
use App\Models\Position;
use App\Models\Reimbursement;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\TypesTimeOff;

class TypesTimeOffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['types_timeoff'] = Timeoff::all();
        return view('mst.timeoff.index', $data);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['employees'] = Employee::all();
        $data['positions'] = Position::all();

        return view('mst.reimbursement.create', $data);
        $data['req_time_offs'] = ReqTimeOff::all();
        $data['employees'] = Employee::all();
        $data['positions'] = Position::all();

        return view('mst.requestTimeOff.index', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
