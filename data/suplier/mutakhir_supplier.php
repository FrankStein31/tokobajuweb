<!doctype html>
<html>
    <head>
        <title>Pagination with Boostrap 3 - harviacode.com</title>
       <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"/> 
        <script src="../bootstrap/js/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
       <script src="../bootstrap/js/bootstrap.min.js"></script>
        <style>
            /*custom css*/
            .pagination, .pager{
                margin-top: 0px
            }
            .table{
                margin-top: 20px;
            }
        </style>



<?php
$kiriman = $_GET['data'];

include "../../config.php";

$supplier=mysqli_query($conn, "select * from merk where id_merk='$kiriman'");

$data_supplier = mysqli_fetch_array($supplier);

echo "
<form action=simpan_mutakhir_supplier.php method=post>
 <table style='font-family:sans-serif'; class='table table-bordered'>
  <tr>
   <td>ID Merk</td>
   <td><input type=text  class=form-control name=id value='$data_supplier[0]' readonly></td>
  </tr>
  <tr>
   <td>Nama Merk</td>
   <td><input type=text class=form-control name=nama value='$data_supplier[1]'></td>
  </tr>
  <tr>
   <td><input type=submit class='btn btn-primary' value='Simpan'></td>
   <td><a href=index.php><input class='btn btn-danger' type=button value=Batal></a></td>
  </tr>
 </table>
</form>";
?>
