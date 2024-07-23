<?php
$a 	= $_POST['id'];
$b 	= $_POST['nama'];

include "../../config.php";

$mutakhir = mysqli_query($conn, "UPDATE `merk` SET `nm_merk`='$b' WHERE `id_merk`='$a'");					

if ($mutakhir)
 {
?>
<script type=text/javascript>
 alert ('Data Berhasil di Mutakhirkan');
 window.location='index.php';
</script>
<?php
}
?>
