<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Halaman Admin</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Admin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-control>
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="master.php">Master Data</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="transaksi.php">Transaksi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Laporan</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="container">
            <h1>Aplikasi Input Barang - Edit Barang</h1>
            <?php
            include "conn.php";

            $id = $_GET['id'];
            $query = "SELECT * FROM barang WHERE id=$id";
            $result = mysqli_query($conn, $query);

            if ($result) {
                if (mysqli_num_rows($result) > 0) {
                    $barang = mysqli_fetch_assoc($result);
            ?>
            <form method="post" action="update_barang.php">
                <input type="hidden" name="id" value="<?php echo $barang['id']; ?>">
                <label for="nama">Nama Barang:</label>
                <input type="text" name="nama" id="nama" value="<?php echo $barang['nama']; ?>"> required<br>

                <label for="nama">Tipe Barang:</label>
                <input type="text" name="tipe" id="tipe" value="<?php echo $barang['tipe']; ?>"> required<br>

                <label for="nama">Jumlah Barang:</label>
                <input type="text" name="jumlah" id="jumlah" value="<?php echo $barang['jumlah']; ?>"> required<br>

                <label for="nama">Deskripsi Barang:</label>
                <input type="text" name="deskripsi" id="deskripsi" value="<?php echo $barang['deskripsi']; ?>"> required<br>

                <label for="nama">Gambar:</label>
                <input type="file" name="gambar" id="gambar" value="<?php echo $barang['gambar']; ?>"> required<br>
                
                <label for="nama">Harga Barang:</label>
                <input type="text" name="harga" id="harga" value="<?php echo $barang['harga']; ?>"> required<br>

                <button type="submit">Simpan</button>
            </form>
            <?php
                } else {
                    echo "Data barang tidak ditemukan.";
                }
            } else {
                echo "Error: " . mysqli_error($conn);
            }
            ?>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
</body>
</html>