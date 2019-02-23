<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    function index($slug, $version = '') {
        return view('game.'.$slug);
    }
}
