<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SongController extends Controller
{
    function index($slug) {
        return view('song.'.$slug);
    }
}
