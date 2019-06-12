<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RController extends Controller
{
    function index($slug) {
        return view('r.'.$slug);
    }
}
