<!doctype html>
<html>
<head>
    <title>Pagination with Boostrap 3</title>
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
</head>

<body>
    <?php
    $kiriman = $_GET['data'];

    include "../../config.php";

    $barang = mysqli_query($conn, "select * from baju where id_baju='$kiriman'");

    $data_barang = mysqli_fetch_array($barang);

    echo "
    <br/><br/><br/><br/>
    <center>
    <form action='simpan_mutakhir_barang.php' method='post' enctype='multipart/form-data'>
        <table style='font-family:sans-serif' class='table table-bordered'>
            <tr>
                <td>ID Baju</td>
                <td>:</td>
                <td><input class='form-control' type='text' name='id_baju' value='$data_barang[0]' readonly></td> 
            </tr>
            <tr>
                <td>Nama Baju</td>
                <td>:</td>
                <td><input class='form-control' type='text' name='nama' value='$data_barang[1]'></td>
            </tr>
            <tr>
                <td>Jenis Baju</td>
                <td>:</td>
                <td><input class='form-control' type='text' name='jenis' value='$data_barang[2]'></td>
            </tr>
            <tr>
                <td>Ukuran</td>
                <td>:</td>
                <td><input class='form-control' type='text' name='ukuran' value='$data_barang[3]'></td>
            </tr>
            <tr>
                <td>Warna</td>
                <td>:</td>
                <td><input class='form-control' type='text' name='warna' value='$data_barang[4]'></td>
            </tr>
            <tr>
                <td>ID Merk</td>
                <td>:</td>
                <td><input class='form-control' type='text' name='id_merk' value='$data_barang[5]'></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td><input class='form-control' type='text' name='harga' value='$data_barang[6]'></td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td>:</td>
                <td><input class='form-control' type='text' name='jumlah' value='$data_barang[7]'></td>
            </tr>
            <tr>
                <td><input type='submit' class='btn btn-primary' value='Simpan'></td>
                <td><a href='index.php'><input class='btn btn-primary' type='button' value='Batal'></a></td>
            </tr>
        </table>
    </form>
    </center>

";
?>
