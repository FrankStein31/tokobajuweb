<?php
$kiriman = $_GET["data"];

echo $kiriman;
 
include "../../config.php";
 
$hapus = mysqli_query($conn, "DELETE FROM `baju` WHERE id_baju = '".$kiriman."'");
 
if ($hapus)
 {
?>

<script type=text/javascript>
 alert ('Data Berhasil di Hapus');
 window.location='index.php';
</script>

<?php
}
else
{
?>
<script type=text/javascript>
 alert ('Data Gagal di Hapus');
 window.location='index.php';
</script>
<?php
}
?>
