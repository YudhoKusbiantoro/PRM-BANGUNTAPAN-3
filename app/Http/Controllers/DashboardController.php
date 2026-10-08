<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $privatePosts = Post::where('visibility', 'private')->latest()->get();
        $programs = \App\Models\Program::latest()->take(5)->get();
        $upcomingAgendas = \App\Models\Agenda::where('start_date', '>=', now()->toDateString())->orderBy('start_date')->take(3)->get();

        if ($user->role === 'anggota') {
            return view('dashboard', compact('privatePosts', 'programs', 'upcomingAgendas'));
        }
        
        $stats = [
            'total_posts' => Post::count(),
            'total_drafts' => Post::where('status', 'draft')->count(),
            'total_agendas' => \App\Models\Agenda::count(),
            'total_aums' => \App\Models\Aum::count(),
        ];
        return view('dashboard', compact('stats', 'privatePosts', 'programs', 'upcomingAgendas'));
    }
}
