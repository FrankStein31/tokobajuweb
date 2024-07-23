<?php
$a 	= $_POST['id'];
$b 	= $_POST['nama'];

include "../../config.php";

$supplier = mysqli_query($conn, "select * from merk where id_merk='$a'");

$jm_baris_query = mysqli_num_rows($supplier);

if($jm_baris_query==1)
{
	echo "Data Sudah Ada";
	exit;
	}
	else
	{
  
  $simpan = mysqli_query($conn, "INSERT INTO `merk`(`id_merk`, `nm_merk`) VALUES ('$a','$b')");					

?>		
<script type=text/javascript>
  alert('data berhasil disimpan');
  window.location='index.php';
</script>
<?php
}
?>
