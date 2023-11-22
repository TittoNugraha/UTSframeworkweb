<!-- resources/views/input_barang.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Barang</title>
    <style>
        body {
            background-color: #f5f5f5; /* Light gray background */
            color: #333; /* Dark text color */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }

        form {
            max-width: 400px;
            padding: 20px;
            background-color: #fff; /* White form background */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #004d00; /* Dark green heading color */
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #004d00; /* Dark green label text color */
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc; /* Light gray border */
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #004d00; /* Dark green submit button background */
            color: #ffffff; /* White text color for submit button */
            cursor: pointer;
            border: none;
            border-radius: 4px;
            padding: 10px;
        }

        input[type="submit"]:hover {
            background-color: #006600; /* Darker green on hover */
        }
    </style>
</head>
<body>
    <form method="post" action="/hasil">
        @csrf
        <h2>Input Barang</h2>
        <label for="Kode Barang">Kode Barang:</label>
        <input type="text" name="kode_barang" required>
        <label for="Nama Barang">Nama Barang:</label>
        <input type="text" name="nama_barang" required>
        <label for="Jenis Varian">Jenis Varian:</label>
        <input type="text" name="jenis_varian" required>
        <label for="Qty">Qty:</label>
        <input type="number" name="qty" required>
        <label for="Harga Jual">Harga Jual:</label>
        <input type="number" name="harga_jual" required>
        <input type="submit" value="Proses">
    </form>
</body>
</html>
