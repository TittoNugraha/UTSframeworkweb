<?php

// app/Http/Controllers/BarangController.php

// app/Http/Controllers/BarangController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function formInput()
    {
        return view('input_barang');
    }

    public function formHasil(Request $request)
    {
        // Validasi input form di sini jika diperlukan
        $barang = Barang::create($request->all());

        $total_harga = $barang->qty * $barang->harga_jual;

        // Diskon berdasarkan aturan
        $diskon = 0;
        if ($total_harga >= 500000) {
            $diskon = 50;
        } elseif ($total_harga >= 200000) {
            $diskon = 20;
        } elseif ($total_harga >= 100000) {
            $diskon = 10;
        }

        $potongan_harga = ($diskon / 100) * $total_harga;
        $harga_setelah_diskon = $total_harga - $potongan_harga;

        return view('hasil_input', [
            'barang' => $barang,
            'diskon' => $diskon,
            'potongan_harga' => $potongan_harga,
            'harga_setelah_diskon' => $harga_setelah_diskon,
        ]);
    }
    public function index()
    {
    return view('input_barang');
    }
}

