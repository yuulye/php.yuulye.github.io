<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResearchController extends Controller
{
    function index($slug) {
        return view('research.'.$slug);
    }
}
