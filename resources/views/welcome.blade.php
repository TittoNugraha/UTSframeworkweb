<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            background-color: #f0f8f0; /* light green background */
            color: #004d00; /* dark green text color */
            font-family: Arial, sans-serif;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #e0ffe0; /* light green form background */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #004d00; /* dark green label text color */
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #004d00; /* dark green submit button background */
            color: #ffffff; /* white text color for submit button */
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #006600; /* darker green on hover */
        }
    </style>
</head>
<body>
    <form>
        <label for="Kode Barang">Kode Barang: </label>
        <input type="text" name="kodebarang" required>
        <br>
        <label for="Nama Barang">Nama Barang: </label>
        <input type="text" name="namabarang" required>
        <br>
        <label for="Jenis Varian">Jenis Varian: </label>
        <input type="text" name="jenisvarian" required>
        <br>
        <label for="Qty">Qty: </label>
        <input type="number" name="qty" required>
        <br>
        <label for="Harga Jual">Harga Jual: </label>
        <input type="number" name="hargajual" required>
        <br>
        <input type="submit" value="Login!">
    </form>
</body>
</html>