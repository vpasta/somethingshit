<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class KaryawanAuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.karyawan-register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nik' => 'required|unique:karyawan',
            'jabatan' => 'required',
            'email' => 'required|email|unique:karyawan',
            'password' => 'required|min:6|confirmed',
        ]);

        Karyawan::create([
            'nama' => $request->nama,
            'nik' => $request->nik,
            'jabatan' => $request->jabatan,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('karyawan.login')->with('success', 'Registrasi berhasil, silakan login.');
    }
}
