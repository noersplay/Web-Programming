<?php
include "conn.php";
// Mendapatkan ID barang yang akan dihapus
$id = $_GET['id'];

// Menjalankan query DELETEs
$query = "DELETE FROM barang WHERE id=$id";
$result = mysqli_query($conn, $query);

// Memeriksa apakah query berhasil dijalankan 
if ($result){
    echo "Data barang berhasil dihapus.";
    header('Location:http://localhost/web_programming/myaplikasi/master.php');
} else {
    echo "ERROR:" . mysqli_error($conn);
}
?>