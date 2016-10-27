<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    public function index () {

        $seasons = \App\Season::all();

        return view('home.index',[
            "seasons" => $seasons
        ]);
    }
}
