<?php

namespace App\Http\Controllers;

use App\Models\Timeoff;
use App\Models\TypesTimeoff;
use App\Models\Position;
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
        $data['reqtimeoffs'] = Timeoff::all();
        return view('mst.timeoff.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['reqtimeoffs'] = TimeOff::all();
        $data['types_timeoff'] = TypesTimeOff::all();
        $data['positions'] = Position::all();

        return view('mst.timeoff.index', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $model = new TimeOff();

        $model->name = $request->name;
        $model->position_id =  $request->position_id;
        $model->types_id = $request->types_id;
        $model->date = $request->date;
        $model->reason = $request->reason;
        $model->status = $request->status;

        $model->save();

        return view('mst.timeoff.index', $data);
        return redirect()->route('mst.timeoff.index');

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
        $data['reqtimeoffs'] = TimeOff::all();
        $data['types_timeoff'] = TypesTimeOff::all();
        $data['positions'] = Position::all();

        $data['reqtimeoff'] = TimeOff::find($id);
        $data['types_timeoff'] = TypesTimeOff::find($id);
        $data['position'] = Position::find($id);

        return view('mst.timeoff.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $model = TimeOff::find($id);

        $model->name = $request->name;$model->position_id =  $request->position_id;
        $model->types_id = $request->types_id;
        $model->date = $request->date;
        $model->reason = $request->reason;
        $model->status = $request->status;
        $model->updated_by = Auth::user()->id;

        $model->save();

        return redirect()->route('mst.timeoff.edit');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = TimeOff::find($id);

        $model->save();

        $model->delete();

        return redirect()->route('timeoff.index');
    }
}

