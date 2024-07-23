<?php
$a 	= $_POST['id'];
$b 	= $_POST['username'];
$c	= $_POST['password'];
$d	= $_POST['nama'];
$e	= $_POST['alamat'];
$f	= $_POST['telepon'];
$g	= $_POST['level'];


include "../../config.php";

$user = mysqli_query($conn, "select * from user where id_user='$a'");

$jm_baris_query = mysqli_num_rows($user);

if($jm_baris_query==1)
{
	echo "Data Sudah Ada";
	exit;
	}
	else
	{
  
  $simpan = mysqli_query($conn, "INSERT INTO `user`(`id_user`, `username`, `password`, `nama`, `alamat`, `no_tlp`, `level`) VALUES ('$a','$b','$c','$d','$e','$f','$g')");					

?>		
<script type=text/javascript>
  alert('data berhasil disimpan');
  window.location='index.php';
</script>
<?php
}
?>
