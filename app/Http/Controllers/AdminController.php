<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return 'Hier komt de admin pagina, deze pagina is alleen te zien voor admins uiteraard.';
    }

    public function showUsers()
    {
        return 'Hier komen alle users, waar admins bepaalde dingen van kunnen aanpassen.';
    }
}
