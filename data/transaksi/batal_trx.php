
<?php 
  
include "../../config.php";



$kiriman = $_GET["data"];

echo $kiriman;


$hapus = mysqli_query($conn, "DELETE FROM `trx_out` WHERE kd_trx = '".$kiriman."'");

$hapus1 = mysqli_query($conn, "DELETE FROM `trx_sementara` WHERE kd_trx = '".$kiriman."'");
 
if ($hapus)
 {
?>

<script type=text/javascript>
 alert ('Data Berhasil di Hapus');
 window.location='trx.php';
</script>

<?php
}
else
{
?>
<script type=text/javascript>
 alert ('Data Gagal di Hapus');
 window.location='trx.php';
</script>
<?php
}
?>
