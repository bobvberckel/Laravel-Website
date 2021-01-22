<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    // Profile Controller
    public function index()
    {
        return 'Hier komt uw profiel te staan.';
    }

    // Register Controller
    public function register()
    {
        return 'Hier kunt u registreren.';
    }

    public function registeremail()
    {
        return 'Hier zal uiteindelijk de mail verstuurt worden om zeker te weten dat het de juiste email is.';
    }

    // Login Controller
    public function login()
    {
        return 'Hier kunt u inloggen.';
    }
}
