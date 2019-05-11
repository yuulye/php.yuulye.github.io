<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuranController extends Controller
{
    function read() {
        return view('quran.read');
    }

    function index() {
        return view('quran');
    }

    function tajwid() {
        return view('quran.tajwid');
    }
}
