<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    // tampil data admin
    public function index()
    {
        $admins = Admin::with('user')->latest()->get();
        return view('admin.index', compact('admins'));
    }

    // form tambah
    public function create()
    {
        return view('admin.create');
    }

    // simpan data
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => [
                'required',
                'email',
                'unique:users,email',
                function ($attr, $value, $fail) {
                    if (
                        !str_ends_with($value, '@ukk2026.com') &&
                        !str_ends_with($value, '@gmail.com')
                    ) {
                        $fail('Email harus menggunakan @ukk2026.com atau @gmail.com');
                    }
                },
            ],
            'password' => 'required|min:6',
            'nip' => 'required|unique:admins,nip',
            'no_hp' => 'nullable|string|max:20',
            'alamat' => 'nullable|string',
        ]);

        // simpan ke users
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'admin',
        ]);

        // simpan ke admins
        Admin::create([
            'user_id' => $user->id,
            'nip' => $request->nip,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
        ]);

        return redirect()->route('admin.index')
            ->with('success', 'Admin berhasil ditambahkan');
    }

    // form edit
    public function edit($id)
    {
        $admin = Admin::with('user')->findOrFail($id);
        return view('admin.edit', compact('admin'));
    }

    // update data
    public function update(Request $request, $id)
    {
        $admin = Admin::with('user')->findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => [
                'required',
                'email',
                'unique:users,email,' . $admin->user_id,
                function ($attr, $value, $fail) {
                    if (
                        !str_ends_with($value, '@ukk2026.com') &&
                        !str_ends_with($value, '@gmail.com')
                    ) {
                        $fail('Email harus menggunakan @ukk2026.com atau @gmail.com');
                    }
                },
            ],
            'nip' => 'required|unique:admins,nip,' . $admin->id,
            'no_hp' => 'nullable|string|max:20',
            'alamat' => 'nullable|string',
        ]);

        // update user
        $admin->user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        // update admin
        $admin->update([
            'nip' => $request->nip,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
        ]);

        return redirect()->route('admin.index')
            ->with('success', 'Admin berhasil diupdate');
    }

    // hapus data
    public function destroy($id)
    {
        $admin = Admin::findOrFail($id);

        // hapus user (admin ikut kehapus)
        $admin->user->delete();

        return redirect()->route('admin.index')
            ->with('success', 'Admin berhasil dihapus');
    }
}