<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class carController extends Controller
{
    public function car()
    {
        return view("cars");
    }
}
