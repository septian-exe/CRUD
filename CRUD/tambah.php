<?php
    // koneksi ke data base
    require 'function.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST"){

    if(tambah($_POST) > 0){
        echo "
        <script> alert('data berhasil ditambahkan!');
        document.location.herf = 'index.php';
        </script>";
    }else {
        echo "<script>
        alert(data gagal ditambahkan!');
        document.location.herf = 'index.php';</script>";
    }
    
}

?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">Gambar</label>
                <input type="text" name="gambar" id="gambar">
            </li>
            <li>
                <label for="nama">Nama Barang</label>
                <input type="text" name="Nama_Barang" id="Nama_Barang">
            </li>
            <li>
                <label for="nama">Kode Barang</label>
                <input type="text" name="Kode_Barang" id="Kode_Barang">
            </li>
            <li>
                <label for="nama">Harga Barang</label>
                <input type="text" name="Harga_Barang" id="Harga_Barang">
            </li>
            <li>
                <label for="nama">Stok Barang</label>
                <input type="text" name="Stok_Barang" id="Stok_Barang">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>
    </form>

    <a href="index.php">Kembali ke Halaman utama</a>
</body>
</html>