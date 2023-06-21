<?php
include "conn.php";

$nama= $_POST['nama'];
$harga= $_POST['harga'];

$query= "INSERT INTO barang (nama, harga) VALUES ('$nama','$harga')";
$result= mysqli_query($conn, $query);

if($result){
    echo "data barang berhasil disimpan";
    header('Location:http://localhost/web_programming/myaplikasi/master.php');
}else {
    echo"Error:". mysqli_error($conn);
}
?>
    