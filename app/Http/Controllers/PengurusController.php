<?php

namespace App\Http\Controllers;

use App\Models\Pengurus;
use App\Models\Division;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PengurusController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');

        $divisions = \App\Models\Division::orderBy('order', 'asc')->get();
        $groups = [];

        foreach ($divisions as $division) {
            // Include search logic if needed, but grouping is better
            $query = $division->penguruses()->orderBy('order', 'asc')->orderBy('level', 'asc');
            if ($search) {
                $query->where(function($q) use ($search) {
                    $q->where('name', 'like', "%{$search}%")
                      ->orWhere('position', 'like', "%{$search}%");
                });
            }
            $members = $query->get();
            
            if ($members->isNotEmpty() || $search) {
                $groups[$division->name] = $members;
            }
        }
        
        return view('dashboard.penguruses.index', compact('groups', 'search'));
    }

    public function reorder(Request $request)
    {
        $order = $request->input('order'); // Array of IDs in the new order
        if ($order && is_array($order)) {
            foreach ($order as $index => $id) {
                Pengurus::where('id', $id)->update(['order' => $index + 1]);
            }
        }
        return response()->json(['success' => true]);
    }

    public function create()
    {
        $divisions = Division::orderBy('order')->get();
        return view('dashboard.penguruses.create', compact('divisions'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'division_id' => 'required|exists:divisions,id',
            'level' => 'required|integer',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $validated['image_path'] = $request->file('image')->store('penguruses', 'public');
        }

        Pengurus::create($validated);
        return redirect()->route('penguruses.index')->with('success', 'Anggota Pengurus berhasil ditambahkan.');
    }

    public function edit(Pengurus $pengurus)
    {
        $divisions = Division::orderBy('order')->get();
        return view('dashboard.penguruses.edit', compact('pengurus', 'divisions'));
    }

    public function update(Request $request, Pengurus $pengurus)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'division_id' => 'required|exists:divisions,id',
            'level' => 'required|integer',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($pengurus->image_path) {
                Storage::disk('public')->delete($pengurus->image_path);
            }
            $validated['image_path'] = $request->file('image')->store('penguruses', 'public');
        }

        $pengurus->update($validated);
        return redirect()->route('penguruses.index')->with('success', 'Anggota Pengurus berhasil diperbarui.');
    }

    public function destroy(Pengurus $pengurus)
    {
        if ($pengurus->image_path) {
            Storage::disk('public')->delete($pengurus->image_path);
        }
        $pengurus->delete();
        return redirect()->route('penguruses.index')->with('success', 'Anggota Pengurus berhasil dihapus.');
    }
}
