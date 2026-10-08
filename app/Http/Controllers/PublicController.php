<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Setting;
use App\Models\Post;

class PublicController extends Controller
{
    public function index()
    {
        // Fetch all settings as key-value pairs
        $settingsData = Setting::all();
        $settings = [];
        foreach ($settingsData as $setting) {
            $settings[$setting->key] = $setting->value;
        }

        // Fetch public posts and separate them based on type (for latest news and agenda)
        // 'agenda' represents agenda/events, 'berita' and 'kegiatan' are for news/activities.
        $posts = Post::where('visibility', 'public')->where('status', 'published')->latest()->take(5)->get();
        $agendas = \App\Models\Agenda::where('visibility', 'public')->where('start_date', '>=', now()->toDateString())->orderBy('start_date', 'asc')->take(4)->get();
        
        $aums = \App\Models\Aum::all();
        $galleries = \App\Models\Gallery::latest()->take(6)->get();

        return view('welcome', compact('posts', 'agendas', 'settings', 'aums', 'galleries'));
    }

    public function susunanPengurus()
    {
        $divisions = \App\Models\Division::orderBy('order', 'asc')->get();
        $groups = [];

        foreach ($divisions as $division) {
            $penguruses = $division->penguruses()->orderBy('level', 'asc')->get();
            if ($penguruses->isNotEmpty()) {
                $groups[$division->name] = $penguruses;
            }
        }

        return view('susunan-pengurus', compact('groups'));
    }

    public function showAum($slug)
    {
        $aum = \App\Models\Aum::where('slug', $slug)->firstOrFail();
        return view('aum.show', compact('aum'));
    }

    public function showPost($slug)
    {
        $post = Post::where('slug', $slug)->where('visibility', 'public')->firstOrFail();
        return view('posts.show', compact('post'));
    }

    public function showAgenda($id)
    {
        $agenda = \App\Models\Agenda::where('id', $id)->where('visibility', 'public')->firstOrFail();
        return view('agendas.show', compact('agenda'));
    }
}
