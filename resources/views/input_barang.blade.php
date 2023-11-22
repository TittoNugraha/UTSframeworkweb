@extends('utama')

@section('content')
<body>
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Forms</h4>
            <p class="card-description">
                <form method="post" action="/hasil">
                    @csrf
              Basic form layout
            </p>
            <form class="forms-sample">
              <div class="form-group">
                <label for="Kode Barang">Kode Barang</label>
                <input type="text" class="form-control" placeholder="Kode Barang" name="kode_barang">
              </div>
              <div class="form-group">
                <label for="Nama Barang">Nama Barang</label>
                <input type="text" class="form-control" placeholder="Nama Barang" name="nama_barang">
              </div>
              <div class="form-group">
                <label for="Jenis Varian">Jenis Varian</label>
                <input type="text" class="form-control" placeholder="Jenis Varian" name="jenis_varian">
              </div>
              <div class="form-group">
                <label for="Quantity">Quantity</label>
                <input type="number" class="form-control" placeholder="Quantity" name="qty">
              </div>
              <div class="form-group">
                <label for="Harga Jual">Harga Jual</label>
                <input type="number" class="form-control" placeholder="Harga Jual" name="harga_jual">
              </div>
              <button type="submit" class="btn btn-primary me-2">Submit</button>
              <button class="btn btn-light">Cancel</button>
            </form>
          </div>
        </div>
      </div>
</body>
</html>

@endsection
