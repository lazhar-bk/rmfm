<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StreamScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $json=('[ { "day": "Sunday", "events": [ { "show_id": "00000", "show_time": "00:00", "show_time_end": "00:10", "show_title": "Program 1" }, { "show_id": "00030", "show_time": "00:30", "show_time_end": "00:40", "show_title": "Program 2" } ] }, { "day": "Monday", "events": [ { "show_id": "10000", "show_time": "00:00", "show_time_end": "00:10", "show_title": "Program 1" }, { "show_id": "10030", "show_time": "00:30", "show_time_end": "00:40", "show_title": "Program 2" } ] } ]');
        return response()->json($json,200);
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
        //
    }
}
