<?php
include "conn.php";

$id = $_GET['id'];

$query = "DELETE FROM supplier WHERE id=$id";
$result = mysqli_query($conn, $query);

if ($result) {
    echo "Data supplier berhasil dihapus.";
    header('Location:http://localhost/web_programming/myaplikasi/master.php');
} else {
    echo "Error: " . mysqli_error($conn);
}
?>