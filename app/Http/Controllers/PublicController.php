<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PublicController extends Controller
{
    public function index()
    {
        $posts = Post::where('visibility', 'public')->latest()->get();
        return view('welcome', compact('posts'));
    }
}
