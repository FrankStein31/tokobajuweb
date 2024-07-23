<?php
$kiriman = $_GET["data"];

echo $kiriman;
 
include "../../config.php";
 
$hapus = mysqli_query($conn, "DELETE FROM user WHERE id_user = '".$kiriman."'");

if ($hapus) {
    echo "<script type='text/javascript'>
        alert('Data Berhasil di Hapus');
        window.location='index.php';
        </script>";
} else {
    echo "<script type='text/javascript'>
        alert('Data Gagal di Hapus: " . mysqli_error($conn) . "');
        window.location='index.php';
        </script>";
}

?>
