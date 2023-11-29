<?php

// app/Http/Controllers/BarangController.php

// app/Http/Controllers/BarangController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{

    public function home()
    {
        $listBarang = Barang::all();
        foreach ($listBarang as $key => $barang) {
            $listBarang[$key]->totalHargaBarang = $barang->qty * $barang->harga_jual;
            $listBarang[$key]->diskon = $this->hitungDiskon($listBarang[$key]->totalHargaBarang);
            $potonganHarga = ($listBarang[$key]->diskon / 100) * $listBarang[$key]->totalHargaBarang;
            $listBarang[$key]->hargaSetelahDiskon = $listBarang[$key]->totalHargaBarang - $potonganHarga;

        }
        return view ('home', ['listBarang' => $listBarang]);
    }
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

    private function hitungDiskon($totalHarga)
    {
        if ($totalHarga >= 500000) {
            return 50;
        } elseif ($totalHarga >= 200000) {
            return 20;
        } elseif ($totalHarga >= 100000) {
            return 10;
        }

        return 0;
    }
    public function editForm($id)
    {
        $barang = Barang::find($id);
        return view('edit', ['barang' => $barang]);
    }

    public function edit(Request $request, $id)
    {

        $barang = Barang::find($id);

        if ($barang) {
            $barang->kode_barang = $request->kode_barang;
            $barang->nama_barang = $request->nama_barang;
            $barang->jenis_varian = $request->jenis_varian;
            $barang->qty = $request->qty;
            $barang->harga_jual = $request->harga_jual;
            $barang->save();
            return redirect()->route('home');
        }
    }

}

