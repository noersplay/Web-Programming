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
<h1>Aplikasi Input User</h1>

<form method="post" action="insert_user.php">
    <label for="username">username</label>
    <input type="text" name="username" id="username" required><br>

    <label for="sandi">sandi</label>
    <input type="text" name="sandi" id="sandi" required><br>

    <button type="submit">Simpan</button>
</form>
</div>
<script src="https://code.jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>