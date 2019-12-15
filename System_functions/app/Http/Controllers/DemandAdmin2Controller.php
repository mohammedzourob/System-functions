<?php

namespace App\Http\Controllers;

use App\Demand;
use App\DemandAdmin2;
use App\Employee_accepted;
use App\Job;
use Illuminate\Http\Request;

class DemandAdmin2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $demand=Demand::all();
        $demandAdmin2=DemandAdmin2::all();
        return view('admin2.index',compact('demandAdmin2','demand'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $demand = DemandAdmin2::create($request->all());
        $demand->save();
        return redirect('/demands')->with('success', 'The Job has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $demand=DemandAdmin2::find($id);
        return view('Admin2.Show', compact('demand'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(DemandAdmin2 $demandAdmin2)
    {
        $demandAdmin2->delete();
        return redirect('/demandAdmins')->with('success', 'The Prescription has been Remove');
    }

}
