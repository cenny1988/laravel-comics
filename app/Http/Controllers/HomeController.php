<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $menu = [ 'CHARACTERS', 'COMICS', 'MOVIES', 'TV', 'GAMES', 'COLLECTIBLES', 'VIDEOS', 'FANS', 'NEWS', 'SHOP' ];

    public function home()
    {

        $menuLinks = $this -> menu;
        return view('pages.home', compact('menuLinks'));
    }

    public function test()
    {
        $data = [ 'menuLinks' => $this->menu ]; //<------2 Metodo "migliore"! 
        return view('pages.test', $data);
    }
}
