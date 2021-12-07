<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function __invoke()
    {
        // return "Retornando do HomeController";
        return view('home');
    }

    public function principal() {
        return "home controller";
    }

}
