<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    // Profile Controller
    public function index()
    {
        return view('profile');
    }

    // Register Controller
    public function register()
    {
        return view('register');
    }

    public function registeremail()
    {
        return view('registeremail');
    }

    // Login Controller
    public function login()
    {
        return view('login');
    }
}
