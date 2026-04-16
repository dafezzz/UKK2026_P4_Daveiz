<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Pengarang;
use App\Models\Penerbit;
use App\Models\Kategori;
use App\Models\Rak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BukuController extends Controller
{
    // ================= ADMIN =================
    public function index()
    {
        $bukus = Buku::with(['pengarang', 'penerbit', 'kategori', 'rak'])
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
            'raks' => Rak::all(),
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
            'rak_id' => 'nullable|exists:raks,id',
            'cover' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $data = $request->all();

        // ================= UPLOAD COVER =================
        if ($request->hasFile('cover')) {
            $file = $request->file('cover');
            $filename = time() . '_' . uniqid() . '.' . $file->extension();

            $file->move(public_path('images'), $filename);

            $data['cover'] = $filename;
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
            'raks' => Rak::all(),
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
            'rak_id' => 'nullable|exists:raks,id',
            'cover' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $data = $request->all();

        // ================= UPDATE COVER =================
        if ($request->hasFile('cover')) {

            // hapus cover lama
            if ($buku->cover && File::exists(public_path('images/' . $buku->cover))) {
                File::delete(public_path('images/' . $buku->cover));
            }

            $file = $request->file('cover');
            $filename = time() . '_' . uniqid() . '.' . $file->extension();

            $file->move(public_path('images'), $filename);

            $data['cover'] = $filename;
        }

        $buku->update($data);

        return redirect()->route('buku.index')
            ->with('success', 'Buku berhasil diupdate');
    }

    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);

        // hapus cover dari folder
        if ($buku->cover && File::exists(public_path('images/' . $buku->cover))) {
            File::delete(public_path('images/' . $buku->cover));
        }

        $buku->delete();

        return back()->with('success', 'Buku berhasil dihapus');
    }

    // ================= USER =================
    public function katalogUser(Request $request)
    {
        $query = Buku::with(['pengarang', 'penerbit', 'kategori', 'rak']);

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
        $buku = Buku::with(['pengarang', 'penerbit', 'kategori', 'rak'])
            ->findOrFail($id);

        return view('user.detail-buku', compact('buku'));
    }
}