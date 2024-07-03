<?php
   // koneksi ke data base
   require 'function.php';

   $id = $_GET['id'];

   $mhs = query("SELECT * FROM mahasiswa WHERE id=$id")[0];
   if ($_SERVER["REQUEST_METHOD"] == "POST"){

   if(ubah($_POST) > 0){
       echo "
       <script>
        alert('data berhasil diubah!');
       document.location.herf = 'index.php';
       </script>";
   }else {
       echo "<script>
       alert(data gagal diubah!');
       document.location.herf = 'index.php';
       </script>";
   }
   
}

?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ubah Data</title>
</head>
<body>
    <h1>Ubah Data Barang</h1>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $mhs['id']; ?>">
        <ul>
            <li>
                <label for="nama">Gambar</label>
                <input type="text" name="Gambar" id="Gambar" value="<?= $mhs['Gambar']; ?>">
            </li>
            <li>
                <label for="nama">Nama Barang</label>
                <input type="text" name="Nama_Barang" id="Nama_Barang" value="<?= $mhs['Nama_Barang']; ?>">
            </li>
            <li>
                <label for="nama">Kode Barang</label>
                <input type="text" name="Kode_Barang" id="Kode_Barang" value="<?= $mhs['Kode_Barang']; ?>">
            </li>
            <li>
                <label for="nama">Harga Barang</label>
                <input type="text" name="Harga_Barang" id="Harga_Barang" value="<?= $mhs['Harga_Barang']; ?>">
            </li>
            <li>
                <label for="nama">Stok Barang</label>
                <input type="text" name="Stok_Barang" id="Stok_Barang" value="<?= $mhs['Stok_Barang']; ?>">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data</button>
            </li>
        </ul>
    </form>

    <a href="index.php">Kembali ke Halaman utama</a>
</body>
</html>
