<?php
namespace App\Http\Controllers;

use App\Models\Penerbit;
use Illuminate\Http\Request;

class PenerbitController extends Controller
{
    public function index()
    {
        $penerbits = Penerbit::latest()->get();
        return view('penerbit.index', compact('penerbits'));
    }

    public function create()
    {
        return view('penerbit.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kode' => 'required|unique:penerbits',
        ]);

        Penerbit::create($request->all());

        return redirect()->route('penerbit.index')
            ->with('success','Data Penerbit berhasil ditambah');
    }

    public function edit($id)
    {
        $penerbit = Penerbit::findOrFail($id);
        return view('penerbit.edit', compact('penerbit'));
    }

    public function update(Request $request, $id)
    {
        $penerbit = Penerbit::findOrFail($id);

        $request->validate([
            'nama' => 'required',
            'kode' => 'required|unique:penerbits,kode,'.$id,
        ]);

        $penerbit->update($request->all());

        return redirect()->route('penerbit.index')
            ->with('success','Data Penerbit Berhasil Di Upddate');
    }

    public function destroy($id)
    {
        Penerbit::destroy($id);

        return back()->with('success','Data dihapus');
    }
}