<?php
include "koneksi.php";
$id_barang = mysqli_real_escape_string($koneksi, $_POST['id_barang'] ?? '');
$nama_barang = mysqli_real_escape_string($koneksi, $_POST['nama_barang'] ?? '');
$harga = mysqli_real_escape_string($koneksi, $_POST['harga'] ?? '');
$stok = mysqli_real_escape_string($koneksi, $_POST['stok'] ?? '');

mysqli_query($koneksi, "UPDATE barang SET nama_barang='$nama_barang', harga='$harga', stok='$stok' WHERE id_barang='$id_barang'") or die(mysqli_error($koneksi));

header("location:barang.php?pesan=update");
exit;
?>
