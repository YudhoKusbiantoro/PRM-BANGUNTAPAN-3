<?php

namespace App\Http\Controllers;

use App\Models\Division;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    public function index()
    {
        $divisions = Division::orderBy('order')->get();
        return view('dashboard.divisions.index', compact('divisions'));
    }

    public function reorder(Request $request)
    {
        $order = $request->input('order');
        if ($order && is_array($order)) {
            foreach ($order as $index => $id) {
                Division::where('id', $id)->update(['order' => $index + 1]);
            }
        }
        return response()->json(['success' => true]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'order' => 'required|integer'
        ]);
        
        Division::create($validated);
        return redirect()->route('divisions.index')->with('success', 'Divisi berhasil ditambahkan.');
    }

    public function update(Request $request, Division $division)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'order' => 'required|integer'
        ]);

        $division->update($validated);
        return redirect()->route('divisions.index')->with('success', 'Divisi berhasil diperbarui.');
    }

    public function destroy(Division $division)
    {
        if ($division->penguruses()->count() > 0) {
            return redirect()->route('divisions.index')->with('error', 'Divisi tidak dapat dihapus karena masih memiliki anggota pengurus.');
        }
        
        $division->delete();
        return redirect()->route('divisions.index')->with('success', 'Divisi berhasil dihapus.');
    }
}
