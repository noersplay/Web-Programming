<?php
include "conn.php";

$id = $_GET['id'];

$query = "DELETE FROM user WHERE id=$id";
$result = mysqli_query($conn, $query);

if ($result) {
    echo "Data user berhasil dihapus.";
    header('Location:http://localhost/web_programming/myaplikasi/master.php');
} else {
    echo "Error: " . mysqli_error($conn);
}
?>