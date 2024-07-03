<?php

    $conn = mysqli_connect("localhost","root","","crud");


function query($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows [] = $row;
    }
    return $rows;
}

function tambah($data){

    global $conn;
    
    if(isset($_POST['submit'])) {
        $gambar = htmlspecialchars($data['gambar']);
        $Nama_Barang = htmlspecialchars($data['Nama_Barang']);
        $Kode_Barang = htmlspecialchars($data['Kode_Barang']);
        $Harga_Barang = htmlspecialchars($data['Harga_Barang']);
        $Stok_Barang = htmlspecialchars($data['Stok_Barang']);


        $query = "INSERT INTO mahasiswa VALUES ('','$gambar','$Nama_Barang','$Kode_Barang','$Harga_Barang','$Stok_Barang')";

        mysqli_query($conn,$query);

        return mysqli_affected_rows($conn);
    }
}

    function hapus ($id){
        global $conn;
        mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

        return mysqli_affected_rows($conn);
    }
?>

