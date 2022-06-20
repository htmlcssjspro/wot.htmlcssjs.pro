<?php

namespace App\Http\Controllers;

use App\Models\Competition;
use App\Http\Requests\StoreCompetitionRequest;
use App\Http\Requests\UpdateCompetitionRequest;

class CompetitionController extends Controller
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
     * @param  \App\Http\Requests\StoreCompetitionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCompetitionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Competition  $competition
     * @return \Illuminate\Http\Response
     */
    // public function show(Competition $competition)
    public function show($competition)
    {
        $data = [
            'title' => 'Название Соревнования',
            'description' => 'Попасть в топ 5 своей команды по: Нанесенному урону',

            'type' => 'damage-max',
            [
                'type' => 'damage-max',
                'type' => 'damage-average',
                'type' => 'combo',
                'type' => 'damage-blocked',
                'type' => 'damage-assist',
                'type' => 'damage-light',
                'type' => 'fun',
                'type' => 'super',
            ],


            'start' => 'date',
            'end' => 'date',
            'left' => '2д',
            'duration' => 'fix',
            [
                'duration' => 'fix',
                'duration' => 'day',
            ],

            'prizeType' => 'igold',
            [
                'prizeType' => 'igold',
                'prizeType' => 'prem-v',
                'prizeType' => 'prem-acc',
                'prizeType' => 'kit',
            ],
            'prizeFund' => 10000,
            'prizePlace' => 22,
            'prizePlaceTotal' => 46,
            'cost' => 10,



            'level' => [8],
            [
                'level' => [8, 9, 10],
            ],

            'vehicleType' => ['tt'],
            [
                'vehicleType' => ['lt', 'st', 'tt', 'pt', 'sau',]
            ],

            'status' => 'completed',
            [
                'status' => 'active',
                'status' => 'completed',
            ],

        ];

        return view('competitions.single', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Competition  $competition
     * @return \Illuminate\Http\Response
     */
    public function edit(Competition $competition)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCompetitionRequest  $request
     * @param  \App\Models\Competition  $competition
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCompetitionRequest $request, Competition $competition)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Competition  $competition
     * @return \Illuminate\Http\Response
     */
    public function destroy(Competition $competition)
    {
        //
    }
}
