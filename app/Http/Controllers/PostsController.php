<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    function showPosts()
    {
        return view("posts/posts");
    }
}
