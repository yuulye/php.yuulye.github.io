<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivateController extends Controller
{
    function index() {
        return view('private.index');
    }
}
