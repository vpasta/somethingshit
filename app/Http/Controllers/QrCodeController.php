<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QRCodeController extends Controller
{
    public function store(Request $request)
    {
        // Ambil data QR code
        $qrData = $request->input('qr_data');

        // Lakukan sesuatu dengan data QR code, misalnya simpan ke database
        // QRCode::create(['data' => $qrData]);

        return response()->json(['success' => true, 'data' => $qrData]);
    }
}
