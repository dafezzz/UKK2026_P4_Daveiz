<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        $kelas = Kelas::latest()->paginate(10);
        return view('kelas.index', compact('kelas'));
    }

    public function create()
    {
        return view('kelas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kelas' => 'required|unique:kelas,nama_kelas'
        ]);

        Kelas::create([
            'nama_kelas' => $request->nama_kelas
        ]);

        return redirect()->route('kelas.index')->with('success', 'Kelas berhasil ditambah');
    }

    public function edit(Kelas $kela)
    {
        return view('kelas.edit', ['kelas' => $kela]);
    }

    public function update(Request $request, Kelas $kela)
    {
        $request->validate([
            'nama_kelas' => 'required|unique:kelas,nama_kelas,' . $kela->id
        ]);

        $kela->update([
            'nama_kelas' => $request->nama_kelas
        ]);

        return redirect()->route('kelas.index')->with('success', 'Kelas berhasil diupdate');
    }

    public function destroy(Kelas $kela)
    {
        $kela->delete();

        return redirect()->route('kelas.index')->with('success', 'Kelas berhasil dihapus');
    }
}