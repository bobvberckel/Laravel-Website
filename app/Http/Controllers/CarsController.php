<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function index()
    {
        return 'Hier komt alles te staan qua auto\'s';
    }

    public function showCarCategory($category, $id = 0)
    {
        if (strtoupper($category) == 'JDM' || strtoupper($category) == 'MUSCLE' || strtoupper($category) == 'RICER' || strtoupper($category) == 'SUPER') {
            return view('cars', ['category' => $category, 'id' => $id]);
        } else {
            return 'Er ging iets niet goed, probeer het later opnieuw.';
        }
    }
}
