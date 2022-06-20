<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public string $title;
    public string $description;
    public string $h1;

    public function __construct()
    {
    }

    public function index()
    {

    }

    public function homePage()
    {
        $this->financePage();

        // $this->title = 'Admin';
        // $this->description = 'Admin Description';
        // \extract(\get_object_vars($this));
        // return view('components.page-admin.index', compact('title', 'description'));
    }

    public function financePage()
    {
        $this->title = 'Finance';
        $this->description = 'Finance Description';
        \extract(\get_object_vars($this));
        return view('admin.finance', compact('title', 'description'));
    }

    public function referralPage()
    {
        $this->title = 'Referral';
        $this->description = 'Referral Description';
        \extract(\get_object_vars($this));
        return view('admin.referral', compact('title', 'description'));
    }

    public function competitionPage()
    {
        $this->title = 'Competition';
        $this->description = 'Competition Description';
        \extract(\get_object_vars($this));
        return view('admin.competition', compact('title', 'description'));
    }
}
