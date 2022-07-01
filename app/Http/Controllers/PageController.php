<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Http\Requests\StorePageRequest;
use App\Http\Requests\UpdatePageRequest;
use App\Models\User;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Retrieve a model by its primary key...
        // $page = Page::find(1);

        // Retrieve the first model matching the query constraints...
        // $page = Page::where('active', 1)->first();

        // Alternative to retrieving the first model matching the query constraints...
        // $page = Page::firstWhere('active', 1);


        // $page = Page::firstWhere('name', 'home');
        // $page = Page::firstWhere('route', 'home');
    }

    public function home()
    {
        $page = Page::firstWhere('route', 'home');
        return $this->show($page);
    }

    public function raiting()
    {
        $page = Page::firstWhere('route', 'raiting');
        // $users= UserStat::all()->order('raiting');
        $data = [
            'user' => [
                'position' => 1,
                'nickname' => 'Никнейм',
                'gamesTotal' => 1000,
                'gamesWin' => 23,
            ]
        ];
        return $this->show($page, $data);
    }

    public function instructions()
    {
        $page = Page::firstWhere('route', 'instructions');
        return $this->show($page);
    }
    public function faq()
    {
        $page = Page::firstWhere('route', 'faq');
        return $this->show($page);
    }

    public function referral()
    {
        $page = Page::firstWhere('route', 'referral');
        return $this->show($page);
    }
    public function referralPlayer()
    {
        $page = Page::firstWhere('route', 'referral/player');
        return $this->show($page);
    }
    public function referralDeveloper()
    {
        $page = Page::firstWhere('route', 'referral/developer');
        return $this->show($page);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page, array $data = [])
    {
        $metaTitle = $page->meta_title;
        $metaDescription = $page->meta_description;
        $h1 = $page->h1;
        // \extract(\get_object_vars($this));
        return view($page->view, compact('metaTitle', 'metaDescription', 'h1', 'data'));
        // return view($page->view, compact('title', 'description', 'h1'));
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
     * @param  \App\Http\Requests\StorePageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePageRequest $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePageRequest  $request
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePageRequest $request, Page $page)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        //
    }
}
