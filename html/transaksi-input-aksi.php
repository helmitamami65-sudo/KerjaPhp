<?php
include "koneksi.php";
$id_transaksi = mysqli_real_escape_string($koneksi, $_POST['id_transaksi'] ?? '');
$id_barang = mysqli_real_escape_string($koneksi, $_POST['id_barang'] ?? '');
$harga = mysqli_real_escape_string($koneksi, $_POST['harga'] ?? '');
$qty = mysqli_real_escape_string($koneksi, $_POST['qty'] ?? '');
$harga_total = mysqli_real_escape_string($koneksi, $_POST['harga_total'] ?? '');
$nip = mysqli_real_escape_string($koneksi, $_POST['nip'] ?? '');

mysqli_query($koneksi, "INSERT INTO transaksi VALUES ('$id_transaksi', '$id_barang', '$harga', '$qty', '$harga_total', '$nip')") or die(mysqli_error($koneksi));
header("location:transaksi.php?pesan=input");
exit;
?>
