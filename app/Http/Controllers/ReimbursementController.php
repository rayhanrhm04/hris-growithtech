<?php

namespace App\Http\Controllers;

use App\Models\Reimbursement;
use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Employee;
use App\Models\Position;

class ReimbursementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['reimbursements'] = Reimbursement::all();
        return view('mst.reimbursement.index', $data);
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

