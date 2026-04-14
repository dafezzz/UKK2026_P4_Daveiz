<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        $kelas = Kelas::latest()->get();
        return view('kelas.index', compact('kelas'));
    }

    public function create()
    {
        return view('kelas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tingkat' => 'required',
            'jurusan' => 'required',
            'nama_kelas' => 'required',
        ]);

        Kelas::create($request->all());

        return redirect()->route('kelas.index')
            ->with('success','Kelas berhasil ditambah');
    }

    public function edit($id)
    {
        $kelas = Kelas::findOrFail($id);
        return view('kelas.edit', compact('kelas'));
    }

    public function update(Request $request, $id)
    {
        $kelas = Kelas::findOrFail($id);

        $request->validate([
            'tingkat' => 'required',
            'jurusan' => 'required',
            'nama_kelas' => 'required',
        ]);

        $kelas->update($request->all());

        return redirect()->route('kelas.index')
            ->with('success','Data diupdate');
    }

    public function destroy($id)
    {
        Kelas::destroy($id);
        return back()->with('success','Data dihapus');
    }
}