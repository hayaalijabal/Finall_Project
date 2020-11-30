<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontsiteController extends Controller
{
    public function ShowHome(){
        return view('Frontsite.Home');
    }
    public function Girls(){
        return view('Frontsite.Girls');
    }

    public function Boys(){
        return view('Frontsite.Boys');
    }
    public function cart(){
        return view('Frontsite.cart');
    }

    public function IntelligentGames(){
        return view('Frontsite.Intelligent games');
    }
}
