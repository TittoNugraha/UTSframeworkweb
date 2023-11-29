@extends('utama')
@section('content')
    <div class="row mt-5">
        <div class="card">
            <div class="card-body">

                <!-- Add a responsive table inside the card body -->
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Jenis Varian</th>
                                <th>Qty</th>
                                <th>Harga Jual</th>
                                <th>Total Harga</th>
                                <th>Total Harga Setelah Diskon</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($listBarang as $barang)
                            <tr>
                                <td>{{ $barang->kode_barang }}</td>
                                <td>{{ $barang->nama_barang }}</td>
                                <td>{{ $barang->jenis_varian }}</td>
                                <td>{{ $barang->qty }}</td>
                                <td>{{ $barang->harga_jual }}</td>
                                <td>{{ $barang->totalHargaBarang }}</td>
                                <td>{{ $barang->hargaSetelahDiskon }}(Diskon: {{$barang->diskon}}%)</td>
                                <td>
                                    <a href="{{route('edit.form',['id'=>$barang->id])}}" class="btn btn-primary">Edit</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
