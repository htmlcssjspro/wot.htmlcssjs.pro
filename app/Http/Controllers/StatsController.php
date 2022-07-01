<?php

namespace App\Http\Controllers;

use App\Models\Stats;
use App\Http\Requests\StoreStatsRequest;
use App\Http\Requests\UpdateStatsRequest;

class StatsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreStatsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStatsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Stats  $stats
     * @return \Illuminate\Http\Response
     */
    public function show(Stats $stats)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stats  $stats
     * @return \Illuminate\Http\Response
     */
    public function edit(Stats $stats)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStatsRequest  $request
     * @param  \App\Models\Stats  $stats
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStatsRequest $request, Stats $stats)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stats  $stats
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stats $stats)
    {
        //
    }
}
