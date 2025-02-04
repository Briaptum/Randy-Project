<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WWAController extends Controller
{
    public function index()
    {
        return view('who-we-are');
    }
}
