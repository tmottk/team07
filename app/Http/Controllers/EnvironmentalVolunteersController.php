<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\environmentalvolunteers;
class EnvironmentalVolunteersController extends Controller


{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        //
        $environmentalvolunteers = environmentalvolunteers::all();

        return view('environmental.index',compact('environmentalvolunteers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("environmentalvolunteers.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $environmentalvolunteer = EnvironmentalVolunteers::findOrFail($id);
        return view('environmental.show')->with('environmentalvolunteer', $environmentalvolunteer);
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
    public function destroy($id)
    {
        $environmentalvolunteers = environmentalvolunteers::findOrFail($id);
        $environmentalvolunteers->delete();
        return redirect('environmentalvolunteers');
    }
}