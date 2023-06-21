<?php
include "conn.php";
// Mendapatkan data dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];

// Menjalankan query UPDATE
$query = "UPDATE  barang SET nama='$nama', harga='$harga' WHERE id=$id";
$result = mysqli_query($conn, $query);

// Memeriksa apakah query berhasil dijalankan 
if ($result){
    echo "Data barang berhasil diperbarui.";
    header('Location:http://localhost/web_programming/myaplikasi/master.php');
} else {
    echo "ERROR:" . mysqli_error($conn);
}
?>