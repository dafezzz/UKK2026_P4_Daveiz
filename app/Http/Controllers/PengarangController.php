<?php

namespace App\Http\Controllers;

use App\Models\Pengarang;
use Illuminate\Http\Request;

class PengarangController extends Controller
{
    public function index()
    {
        $pengarang = Pengarang::latest()->get();
        return view('pengarang.index', compact('pengarang'));
    }

    public function create()
    {
        return view('pengarang.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:255'
        ]);

        Pengarang::create([
            'nama' => $request->nama
        ]);

        return redirect()->route('pengarang.index')
            ->with('success', 'Pengarang berhasil ditambahkan');
    }

    public function edit($id)
    {
        $pengarang = Pengarang::findOrFail($id);
        return view('pengarang.edit', compact('pengarang'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|max:255'
        ]);

        $pengarang = Pengarang::findOrFail($id);
        $pengarang->update([
            'nama' => $request->nama
        ]);

        return redirect()->route('pengarang.index')
            ->with('success', 'Pengarang berhasil diupdate');
    }

    public function destroy($id)
    {
        $pengarang = Pengarang::findOrFail($id);
        $pengarang->delete();

        return redirect()->route('pengarang.index')
            ->with('success', 'Pengarang berhasil dihapus');
    }
}