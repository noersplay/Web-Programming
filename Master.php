<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Admin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
        <a class="nav-link" href="tranksaksi.php">Transaksi</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="laporan.php">Laporan</a>
    </li>
</ul>
</div>
</nav>
<div class="container mt-4">
<div class="container">
    <h1>Data Barang</h1>
    <a href="input_barang.php" class="btn btn-primary mb-3">Tambah Barang</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Barang</th>
                <th>Tipe</th>
                <th>Jumlah</th>
                <th>Deskripsi</th>
                <th>Gambar</th>
                <th>Harga</th>
                <th>Aksi</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
            include "conn.php";
            $query = "SELECT * FROM barang";
            $result = mysqli_query($conn, $query);

            if($result) {
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['nama'] . "</td>";
                        echo "<td>" . $row['tipe'] . "</td>";
                        echo "<td>" . $row['jumlah'] . "</td>";
                        echo "<td>" . $row['deskripsi'] . "</td>";
                        echo '<td> <img src="uploads/' . $row['gambar'] . '" width="500px" /></td>';
                        echo "<td>" . $row['harga'] . "</td>";
                        echo "<td>
                            <a href='edit_barang.php?id=" . $row['id'] . "' class='btn btn-primary'>Edit</a>
                            <a href='delete_barang.php?id=" . $row['id'] . "' class='btn btn-danger'>Hapus</a>
                            </td>";
                        echo "<tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>Tidak ada data barang.</td></tr>";
                }
            } else {
                echo "<tr><td colspan='4'>Error: " . mysqli_error($conn) . "</td></tr>";
            }
            ?>
        </tbody>

    </table>
</div>
</div>

<div class="container mt-3">
<div class="container">
    <h1>Data Supplier</h1>
    <a href="input_supplier.php" class="btn btn-primary mb-3">Tambah Supplier</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Aksi</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
            include "conn.php";
            $query = "SELECT * FROM supplier";
            $result = mysqli_query($conn, $query);

            if($result) {
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['nama'] . "</td>";
                        echo "<td>" . $row['alamat'] . "</td>";
                        echo "<td>" . $row['telpon'] . "</td>";
                        echo "<td>
                            <a href='edit_supplier.php?id=" . $row['id'] . "' class='btn btn-primary'>Edit</a>
                            <a href='delete_supplier.php?id=" . $row['id'] . "' class='btn btn-danger'>Hapus</a>
                            </td>";
                        echo "<tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>Tidak ada data supplier.</td></tr>";
                }
            } else {
                echo "<tr><td colspan='4'>Error: " . mysqli_error($conn) . "</td></tr>";
            }
            ?>
        </tbody>

    </table>
</div>
</div>

<div class="container mt-4">
<div class="container">
    <h1>Data User</h1>
    <a href="input_user.php" class="btn btn-primary mb-3">Tambah User</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>sandi</th>
                <th>Aksi</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
            include "conn.php";
            $query = "SELECT * FROM user";
            $result = mysqli_query($conn, $query);

            if($result) {
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['username'] . "</td>";
                        echo "<td>" . $row['sandi'] . "</td>";
                        echo "<td>
                            <a href='edit_user.php?id=" . $row['id'] . "' class='btn btn-primary'>Edit</a>
                            <a href='delete_user.php?id=" . $row['id'] . "' class='btn btn-danger'>Hapus</a>
                            </td>";
                        echo "<tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>Tidak ada data user.</td></tr>";
                }
            } else {
                echo "<tr><td colspan='4'>Error: " . mysqli_error($conn) . "</td></tr>";
            }
            ?>
        </tbody>

    </table>
</div>
</div>
<script src="https://code.jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>