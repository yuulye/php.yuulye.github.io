<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuranController extends Controller
{
    function index() {
        return view('quran');
    }

    function tajwid() {
        return view('quran.tajwid');
    }
}
