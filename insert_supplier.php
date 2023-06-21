<?php
include "conn.php";

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telpon = $_POST['telpon'];

// Query untuk menyimpan data ke dalam tabel supplier
$sql = "INSERT INTO supplier (nama, alamat, telpon) VALUES ('$nama', '$alamat', '$telpon')";

if ($conn->query($sql) === TRUE) {
    echo "Data supplier berhasil ditambahkan";
    header('location:http://localhost/web_programming/myaplikasi/master.php');
} else {
    echo "Error: " . mysqli_error($conn);
}
?>