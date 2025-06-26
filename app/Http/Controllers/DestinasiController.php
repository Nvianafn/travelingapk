<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaketWisata;
class DestinasiController extends Controller
{
    public function index()
    {
        $destinasi = PaketWisata::all();
        return view('destinasi', compact('destinasi'));
    }

    public function pilih(Request $request)
    {
        $request->validate([
            'destinasi' => 'required'
        ]);

        // Simpan ke session untuk sementara
        session(['destinasi' => $request->destinasi]);

        return redirect()->route('pembayaran');
    }
}
