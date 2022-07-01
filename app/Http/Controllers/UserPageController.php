<?php

namespace App\Http\Controllers;

use App\Models\UserPage;
use App\Http\Requests\StoreUserPageRequest;
use App\Http\Requests\UpdateUserPageRequest;

class UserPageController extends Controller
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

    public function home()
    {
        //
    }

    public function profile()
    {
        $data = [
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

        $userPage = UserPage::firstWhere('route', 'user/profile');
        // $stats = Stats::firstWhere('nickname', $this->user->nickname);
        return $this->show($userPage, $data);
    }

    public function buygold()
    {
        $data = [
            'name' => 'Никнейм',
            'own' => 2000,
            'bonus' => 3000,
            'total' => 5000,
        ];

        $userPage = UserPage::firstWhere('route', 'user/buygold');
        return $this->show($userPage, $data);
    }

    public function goldconfirmation()
    {
        $data = [
            'quantity' => '10 000 iGold',
        ];

        $userPage = UserPage::firstWhere('route', 'user/goldconfirmation');
        return $this->show($userPage, $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserPage  $userPage
     * @return \Illuminate\Http\Response
     */
    public function show(UserPage $userPage, array $data = [])
    {
        $metaTitle = $userPage->meta_title;
        $metaDescription = $userPage->meta_description;
        $h1 = $userPage->h1;
        // \extract(\get_object_vars($this));
        return view($userPage->view, compact('metaTitle', 'metaDescription', 'h1'), $data);
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
     * @param  \App\Http\Requests\StoreUserPageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserPageRequest $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserPage  $userPage
     * @return \Illuminate\Http\Response
     */
    public function edit(UserPage $userPage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserPageRequest  $request
     * @param  \App\Models\UserPage  $userPage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserPageRequest $request, UserPage $userPage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserPage  $userPage
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserPage $userPage)
    {
        //
    }
}
