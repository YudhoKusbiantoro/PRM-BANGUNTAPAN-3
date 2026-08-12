<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        
        if ($user->role === 'anggota') {
            $privatePosts = Post::where('visibility', 'private')->latest()->get();
            return view('dashboard', compact('privatePosts'));
        }
        
        $stats = [
            'total_posts' => Post::count(),
            'public_posts' => Post::where('visibility', 'public')->count(),
            'private_posts' => Post::where('visibility', 'private')->count(),
        ];
        return view('dashboard', compact('stats'));
    }
}
