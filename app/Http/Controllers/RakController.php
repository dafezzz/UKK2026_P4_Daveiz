<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rak;

class RakController extends Controller
{
    public function index()
    {
        $raks = Rak::latest()->get();
        return view('rak.index', compact('raks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_rak' => 'required|unique:raks,kode_rak',
            'nama_rak' => 'required',
            'keterangan' => 'nullable'
        ]);

        Rak::create($request->all());
        return back()->with('success', 'Rak berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_rak' => 'required|unique:raks,kode_rak,' . $id,
            'nama_rak' => 'required',
            'keterangan' => 'nullable'
        ]);

        Rak::findOrFail($id)->update($request->all());
        return back()->with('success', 'Rak berhasil diupdate');
    }

    public function destroy($id)
    {
        Rak::findOrFail($id)->delete();
        return back()->with('success', 'Rak berhasil dihapus');
    }
}
