<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\PaketWisata;

class PembayaranController extends Controller
{
    public function index($id)
    {
        $paket = PaketWisata::findOrFail($id);

        // Simpan destinasi ke session untuk digunakan di detail
        session(['destinasi' => $id]);

        return view('pembayaran', [
            'nama' => $paket->nama_paket,
            'gambar' => $paket->gambar,
            'harga' => $paket->harga
        ]);
    }

    public function bayar(Request $request)
    {
        $request->validate([
            'metode' => 'required'
        ]);

        // Simpan metode pembayaran ke session
        session(['pembayaran' => $request->metode]);

        return redirect()->route('pembayaran.detail');
    }

    public function detail()
    {
        $destinasiId = session('destinasi');
        $metode = session('pembayaran');
        $user = Auth::user();

        $paket = PaketWisata::findOrFail($destinasiId);

        return view('detail', [
            'user' => $user,
            'paket' => $paket,
            'pembayaran' => $metode
        ]);
    }
}
