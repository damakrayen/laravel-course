<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function pagetest(){
        return view('pagetest');
    }
    public function home(){
        return view('home');
    }
    public function courtownerint(){
        return view('courtownerint');
    }
    public function tournois(){
        return view('tournois');
    }
    public function postmatch(){
        return view('postmatch');
    }
    public function tennishub(){
        return view('tennishub');
    }
    public function playerint(){
        return view('playerint');
    }

}
