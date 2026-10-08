<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        
        $programs = Program::query()
            ->when($search, function ($query, $search) {
                return $query->where('title', 'like', "%{$search}%");
            })
            ->latest()
            ->paginate(10)
            ->withQueryString();

        return view('dashboard.programs.index', compact('programs'));
    }
    public function show(Program $program)
    {
        return view('dashboard.programs.show', compact('program'));
    }

    public function create()
    {
        return view('dashboard.programs.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'department' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|in:planned,ongoing,completed',
        ]);

        Program::create($validated);

        return redirect()->route('programs.index')->with('success', 'Program Kerja berhasil ditambahkan.');
    }

    public function edit(Program $program)
    {
        return view('dashboard.programs.edit', compact('program'));
    }

    public function update(Request $request, Program $program)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'department' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|in:planned,ongoing,completed',
        ]);

        $program->update($validated);

        return redirect()->route('programs.index')->with('success', 'Program Kerja berhasil diperbarui.');
    }

    public function destroy(Program $program)
    {
        $program->delete();
        return redirect()->route('programs.index')->with('success', 'Program Kerja berhasil dihapus.');
    }
}
