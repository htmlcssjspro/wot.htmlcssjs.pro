<?php

namespace App\Http\Controllers;

use App\Models\HeaderSlider;
use App\Http\Requests\StoreHeaderSliderRequest;
use App\Http\Requests\UpdateHeaderSliderRequest;

class HeaderSliderController extends Controller
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
     * @param  \App\Http\Requests\StoreHeaderSliderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHeaderSliderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HeaderSlider  $headerSlider
     * @return \Illuminate\Http\Response
     */
    public function show(HeaderSlider $headerSlider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HeaderSlider  $headerSlider
     * @return \Illuminate\Http\Response
     */
    public function edit(HeaderSlider $headerSlider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHeaderSliderRequest  $request
     * @param  \App\Models\HeaderSlider  $headerSlider
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHeaderSliderRequest $request, HeaderSlider $headerSlider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HeaderSlider  $headerSlider
     * @return \Illuminate\Http\Response
     */
    public function destroy(HeaderSlider $headerSlider)
    {
        //
    }
}
