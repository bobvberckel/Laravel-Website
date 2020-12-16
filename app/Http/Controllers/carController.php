<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function car($car_id)
    {
        return view("cars");
    }
}
