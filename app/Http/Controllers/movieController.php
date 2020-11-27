<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class movieController extends Controller
{
    public function movie()
    {
        return view("movies");
    }
}
