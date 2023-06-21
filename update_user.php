<?php
include "conn.php";

$id = $_POST['id'];
$username = $_POST['username'];
$sandi = $_POST['sandi'];

$query = "UPDATE  user SET username='$username', sandi='$sandi'WHERE id=$id";

$result = mysqli_query($conn, $query);

if ($result) {
    echo "Data user berhasil diperbarui.";
    header('Location:http://localhost/web_programming/myaplikasi/master.php');
} else {
    echo "Error: " . mysqli_error($conn);
}
?>