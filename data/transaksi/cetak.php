<html>
<script>
window.print();
</script>

</html>


<?php 
  
include "../../config.php";



$user = mysqli_query ($conn, "SELECT * FROM trx_sementara group by kd_trx");
 while($data = mysqli_fetch_array($user)) {
?>
<tr> <td colspan="5">
 <?php echo "kasir : ";?><?php echo $data['kasir'];?> <br/>
<?php echo "tanggal : ";?><?php echo $data['tgl_trx'];   }?>
<hr color="#000000" size="1" width="100%">
</td></tr>
	<tr>
		<th>No.</th><th>Nama</th> <th>Harga </th> <th>Jumlah</th> <th>Jml harga</th>
	</tr>
	<br>
<?php 
  
include "../../config.php";
  $i="";
$query  = mysqli_query ($conn, "SELECT * FROM trx_sementara ");
while ( $data 	= mysqli_fetch_array ($query)) {
  
//Tampilkan data dari database

 echo "<br>";
 $i++; 
 
 $harga =  $data['harga']; 
 $jumlah =  $data['jumlah'];
 
 $jml_hrg = $harga *  $jumlah;
 
 
 ?>




<tr>
 <td><?php echo $i ;?></td>
 <td><?php echo $data['nama_baju']; ?></td>
  <td>Rp.<?php $harga = $data['harga']; echo number_format($harga,0,".","."); ?></td>
  <td align="center"><?php echo $data['jumlah']; ?></td>
  <td>Rp.<?php echo  number_format($jml_hrg,0,".","."); ?></td>


<?php } 


$a = $_POST['txt1'];
$b = $_POST['txt3'];





 $query1 = mysqli_query ($conn, "SELECT sum(hrg_total) as total FROM trx_sementara ");
  while ( $data1 	= mysqli_fetch_array ($query1)) {
		$total = $data1['total'];		}

?>

</tr>
<tr>
	<td></td><td></td><td></td><td><b></b></td><td><b><hr color="#000000" size="1" width="100%"></b></td>
</tr>

<tr>
	<td></td><td></td><td></td><td><b>Total :</b></td><td><b>Rp.<?php echo number_format($total,0,".", ".");?></b></td>
</tr>
<br>
<tr>
	<td></td><td></td><td></td><td>Bayar </td><td>Rp.<?php echo $a;?></td>
</tr>
<br>
<tr>
	<td></td><td></td><td></td><td>Kembali </td><td>Rp.<?php echo $b;?></b></td>
</tr>
<tr>
	<td>
   <br></td>
   </tr>
<tr>
	<td colspan="5">
<center>
<p> - Terimkasih -</p>
</center>
</td>
</tr>

</table>

<br/>

