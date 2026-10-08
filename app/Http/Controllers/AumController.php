<?php

namespace App\Http\Controllers;

use App\Models\Aum;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class AumController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');
        
        $aums = Aum::when($search, function ($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')
                         ->orWhere('category', 'like', '%' . $search . '%');
        })->latest()->paginate(10)->withQueryString();
        
        return view('dashboard.aums.index', compact('aums', 'search'));
    }

    public function create()
    {
        return view('dashboard.aums.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'short_description' => 'required|string|max:500',
            'content' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $validated['slug'] = Str::slug($validated['title']) . '-' . time();

        if ($request->hasFile('image')) {
            $validated['image_path'] = $request->file('image')->store('aums', 'public');
        }

        Aum::create($validated);
        return redirect()->route('aums.index')->with('success', 'Amal Usaha berhasil ditambahkan.');
    }

    public function show(Aum $aum)
    {
        return view('dashboard.aums.show', compact('aum'));
    }

    public function edit(Aum $aum)
    {
        return view('dashboard.aums.edit', compact('aum'));
    }

    public function update(Request $request, Aum $aum)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'short_description' => 'required|string|max:500',
            'content' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($aum->image_path) {
                Storage::disk('public')->delete($aum->image_path);
            }
            $validated['image_path'] = $request->file('image')->store('aums', 'public');
        }

        $aum->update($validated);
        return redirect()->route('aums.index')->with('success', 'Amal Usaha berhasil diperbarui.');
    }

    public function destroy(Aum $aum)
    {
        if ($aum->image_path) {
            Storage::disk('public')->delete($aum->image_path);
        }
        $aum->delete();
        return redirect()->route('aums.index')->with('success', 'Amal Usaha berhasil dihapus.');
    }
}
