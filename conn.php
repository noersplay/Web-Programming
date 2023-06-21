<?php
$host = "localhost"; // Ganti dengan host MySQL Anda
$user = "root"; // Ganti dengna username MySQL Anda
$password = ""; //Ganti dengan password MySQL Anda
$database = "myaplikasi"; //Ganti dengan nama database Anda

// Membuat koneksi
$conn = mysqli_connect($host, $user, $password, $database);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>