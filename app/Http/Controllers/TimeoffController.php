<?php

namespace App\Http\Controllers;



use App\Models\Employee;
use App\Models\Position;
use App\Models\ReqTimeOff;
use App\Models\User;
use App\Models\Timeoff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class TimeoffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['timeoffs'] = Timeoff::all();
        return view('mst.timeoff.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        

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

