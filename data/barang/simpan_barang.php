<?php
// Mengambil data dari form
$a = $_POST['id_baju'];
$b = $_POST['nama'];
$c = $_POST['jenis'];
$d = $_POST['ukuran'];
$e = $_POST['warna'];
$f = $_POST['id_merk'];
$g = $_POST['harga'];
$h = $_POST['jumlah'];

// Mengambil data foto yang diunggah
// $namaFoto = $_FILES['foto']['name'];
// $tmpFoto = $_FILES['foto']['tmp_name'];

// Membaca konten foto
// $kontenFoto = file_get_contents($tmpFoto);

// Memastikan koneksi ke database telah dibuat sebelumnya
include "../../config.php";

// Memeriksa apakah data dengan id_baju tersebut sudah ada
$barang = mysqli_query($conn, "SELECT * FROM baju WHERE id_baju = '$a'");
$jm_baris_query = mysqli_num_rows($barang);

if ($jm_baris_query == 1) {
    echo "Data Sudah Ada";
    exit;
} else {
    // Menyimpan data dan foto ke dalam database
    $simpan = mysqli_query($conn, "INSERT INTO `baju`(`id_baju`, `nama_baju`, `jenis_baju`, `ukuran`, `warna`, `id_merk`, `harga`, `jumlah`) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h')");

    if ($simpan) {
        echo "<script type='text/javascript'>
                alert('Data berhasil disimpan');
                window.location='index.php';
            </script>";
    } else {
        echo "<script type='text/javascript'>
                alert('Data gagal disimpan');
                window.location='index.php';
            </script>";
    }
}
?>
