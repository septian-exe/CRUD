<?php
  
  require 'function.php';
//   query data mahasiswa
$mahasiswa = query("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Data Barang</h1> 
    <button>
        <a href="tambah.php">Tambah Data</a>
    </button>
    <table border="1" cellpadding="10" callspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nama Barang</th>
            <th>Kode Barang</th>
            <th>Harga Barang</th>
            <th>Stok Barang</th>
           
        </tr>
        <?php $i =1; ?>
        <?php foreach ($mahasiswa as $mhs) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
            <a href="Ubah.php?id=<?= $mhs['id']?>">Ubah</a>
                <a href="Hapus.php?id=<?= $mhs['id'] ?>" onclick = "return confirm('apakah yakin ingin menghapus?');">hapus</a>
            </td>
            <td><img src="img/<?= $mhs['Gambar']; ?>" alt="" width="300px"></td>
            <td><?= $mhs['Nama_Barang']; ?></td>
            <td><?= $mhs['Kode_Barang']; ?></td>
            <td><?= $mhs['Harga_Barang']; ?></td>
            <td><?= $mhs['Stok_Barang']; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>