<?php
namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\User;
use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AnggotaController extends Controller
{
    public function index()
    {
        $anggotas = Anggota::with(['user','kelas'])->latest()->get();
        return view('anggota.index', compact('anggotas'));
    }

    public function create()
    {
        $kelas = Kelas::all();
        return view('anggota.create', compact('kelas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'nis' => 'required|unique:anggotas',
            'kelas_id' => 'required',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make('password123'),
            'role' => 'anggota'
        ]);

        Anggota::create([
            'user_id' => $user->id,
            'kelas_id' => $request->kelas_id,
            'nis' => $request->nis,
            'alamat' => $request->alamat,
        ]);

        return redirect()->route('anggota.index')->with('success','Anggota berhasil ditambah');
    }

    public function edit($id)
    {
        $anggota = Anggota::with('user')->findOrFail($id);
        $kelas = Kelas::all();
        return view('anggota.edit', compact('anggota','kelas'));
    }

    public function update(Request $request, $id)
    {
        $anggota = Anggota::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'nis' => 'required',
        ]);

        $anggota->user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        $anggota->update([
            'kelas_id' => $request->kelas_id,
            'nis' => $request->nis,
            'alamat' => $request->alamat,
        ]);

        return redirect()->route('anggota.index')->with('success','Data diupdate');
    }

    public function destroy($id)
    {
        $anggota = Anggota::findOrFail($id);
        $anggota->user->delete(); // otomatis hapus anggota juga

        return back()->with('success','Data dihapus');
    }
}