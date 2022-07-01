<?php

namespace App\Http\Controllers;

use App\Models\AdminPage;
use App\Http\Requests\StoreAdminPageRequest;
use App\Http\Requests\UpdateAdminPageRequest;

class AdminPageController extends Controller
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

    public function finance()
    {
        $adminPage = AdminPage::firstWhere('route', 'admin/finance');
        return $this->show($adminPage);
    }

    public function referral()
    {
        $adminPage = AdminPage::firstWhere('route', 'admin/referral');
        return $this->show($adminPage);
    }

    public function competitions()
    {
        $adminPage = AdminPage::firstWhere('route', 'admin/competitions');
        return $this->show($adminPage);
    }
    public function battles()
    {
        $adminPage = AdminPage::firstWhere('route', 'admin/battles');
        return $this->show($adminPage);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdminPage  $adminPage
     * @return \Illuminate\Http\Response
     */
    public function show(AdminPage $adminPage, array $data = [])
    {
        $metaTitle = $adminPage->meta_title;
        $metaDescription = $adminPage->meta_description;
        $h1 = $adminPage->h1;
        // \extract(\get_object_vars($this));
        return view($adminPage->view, compact('metaTitle', 'metaDescription', 'h1'), $data);
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
     * @param  \App\Http\Requests\StoreAdminPageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdminPageRequest $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdminPage  $adminPage
     * @return \Illuminate\Http\Response
     */
    public function edit(AdminPage $adminPage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdminPageRequest  $request
     * @param  \App\Models\AdminPage  $adminPage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdminPageRequest $request, AdminPage $adminPage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdminPage  $adminPage
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdminPage $adminPage)
    {
        //
    }
}
