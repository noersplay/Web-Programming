<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin</title>
    <!-- Tambahkan link CSS Boostrap 4 -->
    <link rel="stylesheet"  type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="a">Admin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-control>
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collaps navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                   <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="master.php">Master data</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="transaksi.php">Transaksi</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="Laporan.php">Laporan</a>
                </li>
            </ul>
        </div>
    </nav>
<div class="container mt-4">
<h1>Aplikasi Input Barang</h1>
<form method="post" action="insert_barang.php">
    <label for="nama">Nama Barang:</label>
    <input type="text" name="nama" id="nama" required><br>

    <label for="nama">Tipe Barang:</label>
    <input type="text" name="tipe" id="tipe" required><br>

    <label for="nama">Jumlah Barang:</label>
    <input type="text" name="jumlah" id="jumlah" required><br>

    <label for="nama">Deskripsi Barang:</label>
    <input type="text" name="deskripsi" id="deskripsi" required><br>

    <label for="gambar">Gambar:</label>
    <input type="file" name="gambar" id="gambar" required><br>

    <label for="harga">Harga Barang:</label>
    <input type="number" name="harga" id="harga" required><br>

    <button type="submit">simpan</button>
</form>
</div>

<!-- Tambahkan script JavaScript Boostrap 4-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pooper.js/1.12.9/umd/pooper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>