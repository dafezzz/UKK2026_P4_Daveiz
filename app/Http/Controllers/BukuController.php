<?php

namespace App\Http\Controllers;
use App\Models\Buku;
use App\Models\Pengarang;
use App\Models\Penerbit;
use App\Models\Kategori;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $bukus = Buku::with(['pengarang','penerbit','kategori'])
                    ->latest()->get();

        return view('buku.index', compact('bukus'));
    }

    public function create()
    {
        return view('buku.create', [
            'pengarangs' => Pengarang::all(),
            'penerbits' => Penerbit::all(),
            'kategoris' => Kategori::all(),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'pengarang_id' => 'required',
            'penerbit_id' => 'required',
            'kategori_id' => 'required',
            'stok' => 'required|integer|min:0',
            'cover' => 'nullable|image|max:2048'
        ]);

        if($request->file('cover')){
            $cover = $request->file('cover')->store('cover','public');
        }

        Buku::create([
            ...$request->all(),
            'cover' => $cover ?? null
        ]);

        return redirect()->route('buku.index')
            ->with('success','Buku berhasil ditambahkan');
    }

    public function edit($id)
    {
        $buku = Buku::findOrFail($id);

        return view('buku.edit', [
            'buku'=>$buku,
            'pengarangs'=>Pengarang::all(),
            'penerbits'=>Penerbit::all(),
            'kategoris'=>Kategori::all(),
        ]);
    }

    public function update(Request $request, $id)
    {
        $buku = Buku::findOrFail($id);

        $data = $request->all();

        if($request->file('cover')){
            $data['cover'] = $request->file('cover')->store('cover','public');
        }

        $buku->update($data);

        return redirect()->route('buku.index')
            ->with('success','Buku diupdate');
    }

    public function destroy($id)
    {
        Buku::findOrFail($id)->delete();

        return back()->with('success','Buku dihapus');
    }
}