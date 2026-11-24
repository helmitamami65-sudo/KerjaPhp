<?php
include "koneksi.php";
$id_barang = mysqli_real_escape_string($koneksi, $_POST['id_barang'] ?? '');
$nama_barang = mysqli_real_escape_string($koneksi, $_POST['nama_barang'] ?? '');
$harga = mysqli_real_escape_string($koneksi, $_POST['harga'] ?? '');
$stok = mysqli_real_escape_string($koneksi, $_POST['stok'] ?? '');

mysqli_query($koneksi, "INSERT INTO barang VALUES ('$id_barang', '$nama_barang', '$harga', '$stok')") or die(mysqli_error($koneksi));
header("location:barang.php?pesan=input");
exit;
?>
