<?php
// Koneksi ke database
include "conn.php";

if (isset($_POST['submit'])) {
    // Mendapatkan data barang
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $gambar = $_FILES['gambar']['name'];
    $gambar_tmp = $_FILES['gambar']['tmp_name'];

    // Memindahkan file gambar ke folder uploads
    move_uploaded_file($gambar_tmp, "uploads/" . $gambar);

    // Memasukkan data barang ke database
    $insertQuery = "INSERT INTO barang (nama, harga, gambar) VALUES ('$nama', '$harga', '$gambar')";
    mysqli_query($conn, $insertQuery);

    // Mengalihkan kembali ke halaman master.php setelah berhasil tambah barang
    header("Location:http://localhost/web_programming/myaplikasi/master.php");
}
?>