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
            'nama' => 'required',
            'email' => 'nullable|email',
            'telepon' => 'nullable',
            'alamat' => 'nullable',
        ]);

        Pengarang::create($request->all());

        return redirect()->route('pengarang.index')
            ->with('success','Data Pengarang berhasil ditambah');
    }

    public function edit($id)
    {
        $pengarang = Pengarang::findOrFail($id);
        return view('pengarang.edit', compact('pengarang'));
    }

    public function update(Request $request, $id)
    {
        $pengarang = Pengarang::findOrFail($id);

        $request->validate([
            'nama' => 'required',
            'email' => 'nullable|email',
        ]);

        $pengarang->update($request->all());

        return redirect()->route('pengarang.index')
            ->with('success','Data Pengarang Berhasil diupdate');
    }

    public function destroy($id)
    {
        Pengarang::destroy($id);

        return back()->with('success','Data dihapus');
    }
}