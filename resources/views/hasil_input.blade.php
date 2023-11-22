<!-- resources/views/hasil_proses.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Input</title>
    <style>
        body {
            background-color: #e6f7e6; /* Light green background */
            color: #004d00; /* Dark green text color */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; /* Updated font family */
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .container {
            width: 500px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #59c659; 
        }

        h2 {
            color: #004d00; /* Dark green heading color */
            text-align: center;
        }

        p {
            margin-bottom: 8px;
            font-size: 16px; /* Adjust font size as needed */
            line-height: 1.6; /* Adjust line height for better readability */
        }

        /* Add more styles as needed */
    </style>
</head>
<body>
    <div class="container">
        <h2>Hasil Input Barang</h2>
        <p>Kode Barang: {{ $barang->kode_barang }}</p>
        <p>Nama Barang: {{ $barang->nama_barang }}</p>
        <p>Jenis Varian: {{ $barang->jenis_varian }}</p>
        <p>Qty: {{ $barang->qty }} buah</p>
        <p>Harga Jual: {{ $barang->harga_jual }}</p>
        <p>Total Harga: {{ $barang->qty * $barang->harga_jual }}</p>
        <p>Diskon: {{ $diskon }}%</p>
        <p>Potongan Harga: {{ $potongan_harga }}</p>
        <p>Harga Setelah Diskon: {{ $harga_setelah_diskon }}</p>
    </div>
</body>
</html>
