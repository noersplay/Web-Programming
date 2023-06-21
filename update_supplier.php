<?php
include "conn.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telpon = $_POST['telpon'];

$query = "UPDATE supplier SET nama='$nama', alamat='$alamat', telpon='$telpon' WHERE id=$id";

$result = mysqli_query($conn, $query);

if ($result) {
    echo "Data Supplier berhasil diperbarui.";
    header('Location:http://localhost/web_programming/myaplikasi/master.php');
} else {
    echo "Error: " . mysqli_error($conn);
}
?>