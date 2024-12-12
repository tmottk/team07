<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GenderStatistics;
class GenderStatistic extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        
        
        $GenderStatistics = GenderStatistics::all();
        //return view('GenderStatistics.index',compact('GenderStatistics'));
        return view('GenderStatistics.index')->with('GenderStatistics', $GenderStatistics);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('GenderStatistics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only([
            'year',
            'item',
            'total_count',
            'male_count', 
            'female_count',
        ]);

        $GenderStatistics = GenderStatistics::create($data);

        return redirect('GenderStatistics');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $GenderStatistic = GenderStatistics::findOrFail($id);
        return view('GenderStatistics.show')->with('GenderStatistic', $GenderStatistic);
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
        $GenderStatistic = GenderStatistics::findOrFail($id);
        $GenderStatistic ->delete();
        return redirect('GenderStatistics');
    }
}
