<?php
 include "../../config.php";

 $query1 = mysqli_query ($conn, "DELETE FROM trx_sementara ");
 
 $query2 = mysqli_query ($conn, "DELETE FROM batal_jual");
 
 
if ($query1) {		
	
	header("Location:index.php"); 
	
	}

?>
