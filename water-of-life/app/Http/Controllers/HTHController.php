<?php

namespace App\Http\Controllers;

use App\Models\HelpItem;
use Illuminate\Http\Request;

class HTHController extends Controller
{
    public function index()
    {
        $helpItems = HelpItem::all()->groupBy('category');
        return view('how-to-help', compact('helpItems'));
    }
}
