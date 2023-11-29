@extends('utama')
@section('content')

<form class="forms-sample" action="{{ route('edit',['id'=>$barang->id]) }}" method="POST" id="form">
    @csrf
    <div class="form-group">
        <label for="kode">Kode Barang</label>
        <input type="text" class="form-control" id="kodebarang" name="kode_barang" placeholder="Kode Barang" value="{{$barang->kode_barang}}">
    </div>
    <div class="form-group">
        <label for="nama">Nama Barang</label>
        <input type="text" class="form-control" id="namabarang" name="nama_barang" placeholder="Nama Barang" value="{{$barang->nama_barang}}">
    </div>
    <div class="form-group">
        <label for="jenis">Jenis Varian</label>
        <input type="text" class="form-control" id="jenisvarian" name="jenis_varian" placeholder="Jenis Varian" value="{{$barang->jenis_varian}}">
    </div>
    <div class="form-group">
        <label for="qty">Quantity</label>
        <input type="number" class="form-control" id="qty" name="qty" placeholder="Quantity" value="{{$barang->qty}}">
    </div>
    <div class="form-group">
        <label for="harga">Harga Jual</label>
        <input type="number" class="form-control" id="hargajual" name="harga_jual" placeholder="Harga Barang" value="{{$barang->harga_jual}}">
    </div>
    <button type="submit" class="btn btn-primary me-2">Proses</button>

</form>
@endsection
