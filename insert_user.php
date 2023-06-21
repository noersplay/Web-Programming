<?php
include "conn.php";

$username = $_POST['username'];
$sandi = $_POST['sandi'];

// Query untuk menyimpan data ke dalam tabel user
$sql = "INSERT INTO USER (username, sandi) VALUES ('$username', '$sandi')";

if ($conn->query($sql) === TRUE) {
    echo "Data supplier berhasil ditambahkan";
    header('location:http://localhost/myaplikasi/master.php');
} else {
    echo "Error: " . mysqli_error($conn);
}
?>