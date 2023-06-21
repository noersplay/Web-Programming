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
<h1>Aplikasi Input user - Edit user</h1>

<?php
include "conn.php";
$id = $_GET['id'];

$query = "SELECT *FROM user WHERE id=$id";
$result = mysqli_query($conn, $query);

if($result) {
    if (mysqli_num_rows($result) > 0) {
        $username = mysqli_fetch_assoc($result);
    

?>
<form method="post" action="update_user.php">
    <input type="hidden" name ="id" value="<?php echo $username['id']; ?>">
    <label for="nama">user:</label>
    <input type="text" name ="username" id="username" value="<?php echo $username['username']; ?>" required><br>

    <label for="sandi">sandi:</label>
    <input type="text" name="sandi" id="sandi" value="<?php echo isset($sandi['sandi']) ? $sandi['sandi'] : ''; ?>" required><br>


    <button type="submit">Simpan</button>
</form>
<?php
} else {
    echo "Data User Tidak Ditemukan";
}
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
</div>
<script src="https://code.jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>