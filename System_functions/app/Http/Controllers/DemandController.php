<?php

namespace App\Http\Controllers;

use App\Demand;
use App\DemandAdmin2;
use App\Employee_accepted;
use App\Job;
use Illuminate\Http\Request;

class DemandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $demand=Demand::all();
        return view('demand.indexDemand',compact('demand'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


//        $demand=Demand::with('jobs')->get();
//
//        return view('demand.create', compact('demand'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'details' => 'required',
            'phone_number' => 'required',
        ]);
        $demand = Demand::create($request->all());
        $demand->save();
        return redirect('/jobs')->with('success', 'The Job has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Demand $demand
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $demand=Demand::find($id);
        return view('demand.demandShow', compact('demand'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Demand $demand
     * @return \Illuminate\Http\Response
     */
    public function edit(Demand $demand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Demand $demand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Demand $demand)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Demand $demand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Demand $demand)
    {
        $demand->delete();
        return redirect('/demands')->with('success', 'The Prescription has been Remove');
    }

    public function createJob($id)
    {
        $demand = Job::find($id);
        return view('demand.create', compact('demand'));

    }



    public function demandStoreAdmin2(Request $request)
    {

        $demand = Employee_accepted::create($request->all());


        $demand->save();

        return redirect('/demandAdmins')->with('success', 'The Job has been added');
    }




}
