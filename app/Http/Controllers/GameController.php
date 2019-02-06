<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    function index($slug) {
        return view('game.'.$slug);
    }
}
