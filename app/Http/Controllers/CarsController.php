<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarsController extends Controller
{
    public function index($category = "all", $id = 0)
    {
        $cars = DB::table('cars')->get();

        return view('cars', ['cars' => $cars]);
    }
}
