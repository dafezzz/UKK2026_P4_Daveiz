<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rak;

class RakController extends Controller
{
    public function index()
    {
        $raks = Rak::all();
        return view('rak.index', compact('raks'));
    }

    public function store(Request $request)
    {
        Rak::create($request->all());
        return back()->with('success', 'Rak ditambahkan');
    }

    public function update(Request $request, $id)
    {
        Rak::findOrFail($id)->update($request->all());
        return back()->with('success', 'Rak diupdate');
    }

    public function destroy($id)
    {
        Rak::findOrFail($id)->delete();
        return back()->with('success', 'Rak dihapus');
    }
}