<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public string $title;
    public string $description;
    public string $h1;


    public function index()
    {
        $this->title = 'Home';
        $this->description = 'Home Description';
        \extract(\get_object_vars($this));
        return view('home.index', compact('title', 'description'));
    }

    public function homePage()
    {
        $this->title = 'Home';
        $this->description = 'Home Description';
        \extract(\get_object_vars($this));
        return view('home.index', compact('title', 'description'));
    }

    public function raitingPage()
    {
        $this->title = 'Raiting';
        $this->description = 'Raiting Description';
        $this->h1 = 'Рейтинг игроков';
        $user = [
            'position' => 1,
            'nickname' => 'Никнейм',
            'gamesTotal' => 1000,
            'gamesWin' => 23,
        ];
        \extract(\get_object_vars($this));
        return view('raiting.index', compact('title', 'description', 'h1', 'user'));
    }
}
