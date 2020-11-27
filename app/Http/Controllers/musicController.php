<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class musicController extends Controller
{
    public function music()
    {
        return view("music");
    }
}
