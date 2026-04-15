<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Pengarang;
use App\Models\Penerbit;
use App\Models\Kategori;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    // ================= ADMIN =================
    public function index()
    {
        $bukus = Buku::with(['pengarang','penerbit','kategori'])
                    ->latest()
                    ->get();

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

        $data = $request->all();

        // upload cover
        if ($request->hasFile('cover')) {
            $data['cover'] = $request->file('cover')->store('cover', 'public');
        }

        Buku::create($data);

        return redirect()->route('buku.index')
            ->with('success', 'Buku berhasil ditambahkan');
    }

    public function edit($id)
    {
        $buku = Buku::findOrFail($id);

        return view('buku.edit', [
            'buku' => $buku,
            'pengarangs' => Pengarang::all(),
            'penerbits' => Penerbit::all(),
            'kategoris' => Kategori::all(),
        ]);
    }

    public function update(Request $request, $id)
    {
        $buku = Buku::findOrFail($id);

        $request->validate([
            'judul' => 'required',
            'pengarang_id' => 'required',
            'penerbit_id' => 'required',
            'kategori_id' => 'required',
            'stok' => 'required|integer|min:0',
            'cover' => 'nullable|image|max:2048'
        ]);

        $data = $request->all();

        // upload cover baru
        if ($request->hasFile('cover')) {
            $data['cover'] = $request->file('cover')->store('cover', 'public');
        }

        $buku->update($data);

        return redirect()->route('buku.index')
            ->with('success', 'Buku berhasil diupdate');
    }

    public function destroy($id)
    {
        Buku::findOrFail($id)->delete();

        return back()->with('success', 'Buku berhasil dihapus');
    }

    // ================= USER =================
    public function katalogUser(Request $request)
    {
        $query = Buku::with(['pengarang', 'kategori']);

        // 🔍 search judul
        if ($request->filled('search')) {
            $query->where('judul', 'like', '%' . $request->search . '%');
        }

        // 🎯 filter kategori
        if ($request->filled('kategori')) {
            $query->where('kategori_id', $request->kategori);
        }

        $buku = $query->latest()->paginate(12)->withQueryString();

        $kategori = Kategori::all();

        return view('katalog-user', compact('buku', 'kategori'));
    }

    public function showUser($id)
    {
        $buku = Buku::with(['pengarang','kategori'])->findOrFail($id);

        return view('user.detail-buku', compact('buku'));
    }
}