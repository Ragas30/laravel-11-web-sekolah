<?php

namespace App\Http\Controllers\kegiatan;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\Kegiatan;
use Illuminate\Http\Request;

class kegiatanController extends Controller
{
    public function index()
    {
        return view('kegiatan.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kegiatan' => 'required|string|max:255',
            'detail_keterangan' => 'required|string',
            'foto_kegiatan' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $fotoPath = null;
        if ($request->hasFile('foto_kegiatan')) {
            $fotoPath = $request->file('foto_kegiatan')->store('kegiatan', 'public');
        }

        Kegiatan::create([
            'nama_kegiatan' => $request->nama_kegiatan,
            'detail_keterangan' => $request->detail_keterangan,
            'foto_kegiatan' => $fotoPath,
        ]);

        return redirect()->route('kegiatan.index')->with('success', 'Kegiatan berhasil disimpan');
    }
}
