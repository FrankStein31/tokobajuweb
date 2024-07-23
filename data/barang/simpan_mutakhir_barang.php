<?php
$a 	= $_POST['id_baju'];
$b 	= $_POST['nama'];
$c	= $_POST['jenis'];
$d	= $_POST['ukuran'];
$e	= $_POST['warna'];
$f	= $_POST['id_merk'];
$g	= $_POST['harga'];
$h	= $_POST['jumlah'];

include "../../config.php";

$mutakhir = mysqli_query($conn, "UPDATE `baju` SET `nama_baju`='$b',`jenis_baju`='$c',`ukuran`='$d',`warna`='$e',`id_merk`='$f',`harga`='$g',`jumlah`='$h' WHERE `id_baju`='$a'");					

if ($mutakhir)
 {
?>
<script type=text/javascript>
 alert ('Data Berhasil di Update');
 window.location='index.php';
</script>
<?php
}
?>
