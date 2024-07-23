<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "toko";

$conn = mysqli_connect($server, $user, $password, $database);

$id_baju = $_POST['id_baju'];
$kd_trx = $_POST['kd_trx'];
$kasir = $_POST['kasir'];
$nama_baju = $_POST['nama_baju'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];
$tgl_trx = $_POST['tgl_trx'];
$hrg_total =  $jumlah * $harga;

$sql1 = "INSERT INTO `trx_sementara` VALUES ('$kd_trx','$id_baju','$kasir','$nama_baju','$jumlah','$harga', '$hrg_total', '$tgl_trx')";
$sql2 = "INSERT INTO `trx_out` VALUES ('$kd_trx','$id_baju','$kasir','$nama_baju','$jumlah','$harga', '$hrg_total', '$tgl_trx')";
$exc = mysqli_query($conn, $sql1); // eksekusi perintah pertama $sql1
if($exc)

{ //jika benar perintah $exc 
mysqli_query($conn, $sql2); // jalankan perintah $sql2 
}

if ($sql2) {		
	
	header("Location:trx.php"); 
	
	}
?>
