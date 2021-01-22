<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return 'Hier kunt u contact opnemen met mij.';
    }

    public function sendmail()
    {
        return 'Hier komt te staan dat de mail verstuurt is.';
    }
}
