<!doctype html>
<html>
<head>
    <title>Pagination with Boostrap 3</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"/> 
    <script src="../bootstrap/js/jquery.min.js"></script>
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
</head>

<body>
<?php
echo "
<br/>
<h3>Form Tambah Data Baju</h3>
<form method='post' action='simpan_barang.php' enctype='multipart/form-data'>
    <table style='font-family:sans-serif' class='table table-bordered'>
        <tr>
            <td>Nama Baju</td>
            <td><input class='form-control' type='text' name='nama'></td>
        </tr>
        <tr>
            <td>Jenis Baju</td>
            <td><input class='form-control' type='text' name='jenis'></td>
        </tr>
        <tr>
            <td>Ukuran</td>
            <td><input class='form-control' type='text' name='ukuran'></td>
        </tr>
        <tr>
            <td>Warna</td>
            <td><input class='form-control' type='text' name='warna'></td>
        </tr>
        <tr>
            <td>ID Merk</td>
            <td><input class='form-control' type='text' name='id_merk'></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><input class='form-control' type='text' name='harga'></td>
        </tr>
        <tr>
            <td>Jumlah</td>
            <td><input class='form-control' type='text' name='jumlah'></td>
        </tr>
        <tr>
            <td>ID Baju / Barcode</td>
            <td><input class='form-control' type='text' name='id_baju'></td>
        </tr>
        <tr>
            <td><input type='submit' class='btn btn-primary' value='Simpan'></td>
        </tr>
    </table>
</form>
";
?>
</body>
</html>
