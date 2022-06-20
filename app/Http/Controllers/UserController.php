<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
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
    public function profile()
    {
        $data = [
            'title' => 'Личный кабинет',
            'description' => 'User Description',
            'h1' => 'Личный кабинет',
            'name' => 'Игрок1',
            'raitingTotal' => 40000,
            'battles' => 10220,
            'wins' => '59.60%',
            'expMax' => 600,
            'expAvg' => 2343,
            'dmgMax' => 10220,
            'dmgAvg' => 1246,
            'destroyMax' => 6,
            'destroyAvg' => 3,
            'hit' => '73%',
            'class' => '10/146',
        ];

        return view('user.profile', $data);
    }

    public function buygold()
    {
        $data = [
            'title' => 'Купить iGold',
            'description' => 'Купить iGold Description',
            'h1' => 'Купить iGold',
            'name' => 'Никнейм',
            'own' => 2000,
            'bonus' => 3000,
            'total' => 5000,
        ];

        return view('user.buygold', $data);
    }

    public function goldconfirmation()
    {
        $data = [
            'title' => 'Оформление Покупки',
            'description' => 'Оформление Покупки Description',
            'h1' => 'Оформление Покупки',
            'quantity' => '10 000 iGold',
        ];

        return view('user.goldconfirmation', $data);
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
