<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PetugasController extends Controller
{
    public function index()
    {
        $petugas = Petugas::with('user')->latest()->get();
        return view('petugas.index', compact('petugas'));
    }

    public function create()
    {
        return view('petugas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => [
                'required','email','unique:users,email',
                function ($attr, $value, $fail) {
                    if (
                        !str_ends_with($value, '@ukk2026.com') &&
                        !str_ends_with($value, '@gmail.com')
                    ) {
                        $fail('Email harus @ukk2026.com atau @gmail.com');
                    }
                },
            ],
            'password' => 'required|min:6',
            'nip' => 'required|unique:petugas,nip',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'petugas',
        ]);

        Petugas::create([
            'user_id' => $user->id,
            'nip' => $request->nip,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
        ]);

        return redirect()->route('petugas.index')
            ->with('success','Petugas berhasil ditambahkan');
    }

    public function edit($id)
    {
        $petugas = Petugas::with('user')->findOrFail($id);
        return view('petugas.edit', compact('petugas'));
    }

    public function update(Request $request, $id)
    {
        $petugas = Petugas::with('user')->findOrFail($id);

        $request->validate([
            'name' => 'required',
            'email' => [
                'required','email','unique:users,email,' . $petugas->user_id,
                function ($attr, $value, $fail) {
                    if (
                        !str_ends_with($value, '@ukk2026.com') &&
                        !str_ends_with($value, '@gmail.com')
                    ) {
                        $fail('Email harus @ukk2026.com atau @gmail.com');
                    }
                },
            ],
            'nip' => 'required|unique:petugas,nip,' . $petugas->id,
        ]);

        $petugas->user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        $petugas->update([
            'nip' => $request->nip,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
        ]);

        return redirect()->route('petugas.index')
            ->with('success','Petugas berhasil diupdate');
    }

    public function destroy($id)
    {
        $petugas = Petugas::findOrFail($id);
        $petugas->user->delete();

        return redirect()->route('petugas.index')
            ->with('success','Petugas berhasil dihapus');
    }
}