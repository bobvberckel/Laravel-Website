<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(Request $request)
    {
        $theme_color = env("THEME_COLOR");
        dd($theme_color);

        return view("about");
    }
}
