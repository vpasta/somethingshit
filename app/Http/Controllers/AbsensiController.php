<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absensi; // Pastikan model Absensi sudah ada

class AbsensiController extends Controller
{
    public function create()
    {
        return view('admin.absensi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kegiatan' => 'required|string|max:255',
            'pembawa_materi' => 'required|string|max:255',
            'perusahaan_penyelenggara' => 'required|string|max:255',
            'departemen_penyelenggara' => 'required|string|max:255',
            'absen_dibuka' => 'required|date',
            'absen_ditutup' => 'required|date|after_or_equal:absen_dibuka',
        ]);

        Absensi::create($request->all());

        return redirect()->route('admin.absensi.create')->with('success', 'Absensi berhasil dibuat!');
    }
}
